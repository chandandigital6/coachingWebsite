<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',
            'sort_description' => 'nullable|string|max:500',
            'number_of_student' => 'nullable|integer|min:0',
            'duration' => 'nullable|string',
            'msg' => 'nullable|string',
            'rating' => 'nullable',
            'price' => 'nullable|numeric|min:0',
        ];
    }
}
