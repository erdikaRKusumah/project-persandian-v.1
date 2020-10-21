<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreTestRequest;
use App\Option;

class TestsController extends Controller
{
    public function index()
    {
        $categories = Category::with(['categoryQuestions' => function ($query) {
                $query->inRandomOrder()
                    ->with(['questionOptions' => function ($query) {
                        $query->inRandomOrder();
                    }]);
            }])
            ->whereHas('categoryQuestions')
            ->get();

        return view('client.test', compact('categories'));
    }

    public function store(StoreTestRequest $request)
    {
        $options = Option::find(array_values($request->input('questions')));

        // $options->withCount([
        //     'points AS point_sum' => function ($query) {
        //         $query->select(DB::raw("SUM(total_points) as paidsum"))->where('question_id', '30');
        //     }
        // ]);
        $result = auth()->user()->userResults()->create([
            'total_points' => $options->sum('points')
        ]);

        $questions = $options->mapWithKeys(function ($option) {
            return [$option->question_id => [
                        'option_id' => $option->id,
                        'points' => $option->points
                    ]
                ];
            })->toArray();
        dd($request);

        $result->questions()->sync($questions);

        return redirect()->route('client.results.show', $result->id);
    }
}
