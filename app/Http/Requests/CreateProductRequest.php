<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'name'=>'required|min:3',
            'price'=>'required|numeric'
        ];
    }
    // public function message()
    // {
    //     return [
    //         'name.required'=>'Nhap vao ten',
    //         'name.min'=>'Ten phai lon hon 3 ki tu',
    //         'price.required'=>'Nhap vao gia '
    //         'price.re.numeric'=>'Gia phai la so'
    //     ];
    // }
}
