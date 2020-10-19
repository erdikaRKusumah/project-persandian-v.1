<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreTestRequest;
use App\Option;
use App\Responden;
use Illuminate\Support\Facades\DB;


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

<<<<<<< HEAD
=======
        // $result = auth()->user()->userResults()->create([
        //     'total_points' => $options->sum('points')
        // ]);
>>>>>>> 56f00ac42364a505db17890e20c8b21dff660bd3
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

        $result->questions()->sync($questions);
<<<<<<< HEAD
=======
        // Responden::create($request->all());
        // DB::table('results')->insert([
        //     ['responden_id' => $request->responden_id],
        // ]);
        // Result::create($request->all());
>>>>>>> 56f00ac42364a505db17890e20c8b21dff660bd3

        return redirect()->route('client.results.show', $result->id);
    
    }
    
}
