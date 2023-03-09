<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class barangForm extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama'=>['required', 'string'],
            'kategori_id'=>['required'],
            'anime'=>['required', 'string'],
            'harga'=>['required', 'string'],
            'jumlah'=>['required'],
            'image'=>['nullable', 'mimes:jpg, jpeg, png'],
            'estimasi'=>['required'],
            'desc'=>['required'],
        ];
    }
}
