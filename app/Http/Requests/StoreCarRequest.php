<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
            
                "brand" => ["required","min:3"],
                "type" => "required",
                "price" => "required",
                "weight" => "required",
                "power" => "required",
                "release_date" => "required",
                "energy" => "required",
                "thumbnail" => ["required","url"]
            
        ];
    }
}
