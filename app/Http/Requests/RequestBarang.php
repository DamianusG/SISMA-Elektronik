<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestBarang extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'namaBarang' => 'required|max:255',
            'tipeBarang' => 'required|max:255',
            'deskripsiBarang' => 'required',
            'hargaBarang' => 'required|integer',
            'stokBarang' => 'required|integer',
        ];
    }
}
