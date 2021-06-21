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
            'nama_barang' => 'required|max:255',
            'tipe_barang' => 'required|max:255',
            'deskripsi_barang' => 'required',
            'harga_barang' => 'required|integer',
            'stok_barang' => 'required|integer',
        ];
    }
}
