<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            'title' => 'required|string',
            'genre' => 'required|string',
            'director' => 'string',
            'year_recorded' => 'numeric|between:1990,' . now()->year,
            'storyline' => 'required|string|max:1000'
        ];
    }
}
