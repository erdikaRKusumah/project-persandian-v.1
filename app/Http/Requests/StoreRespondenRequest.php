<?php

namespace App\Http\Requests;

use App\Responden;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreRespondenRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('responden_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'alamat' => [
                'required',
                'string',
            ],
            'no_telpon' => [
                'required',
                'integer',
            ],
            'email'      => [
                'required',
                'unique:users',
            ],
            'pengisi_lembar_evaluasi' => [
                'required',
            ],
            'jabatan'      => [
                'required',
                'string',
            ],
            'tgl_pengisian'      => [
                'required',
            ],
            'deskripsi'      => [
                'required',
                'string',
            ],
        ];
    }
}
