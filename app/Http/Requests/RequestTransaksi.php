<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestTransaksi extends FormRequest
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
            'idPembeli' => 'required|unsignedBigInteger',
            'user_id' => 'required|unsignedBigInteger',
            'statusTransaksi' => 'required|max:255',
            'totalTransaksi' => 'required|integer',           
        ];
    }
}
