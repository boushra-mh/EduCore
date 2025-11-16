<?php

namespace App\Http\Requests\API\Course;

use App\Enums\CourseLevelEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
use PHPUnit\Framework\Constraint\Count;

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
             'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'category_id' => 'required|exists:categories,id',
        'teacher_id' => 'required|exists:teachers,id',
        'duration' => 'required|integer|min:1',
        'level' => ['required',new Enum(CourseLevelEnum::class)],
        'price' => 'required|numeric|min:0',
        'is_published' => 'required|boolean',
            // --- IGNORE ---


        ];

    }
    public function messages(): array
    {
        return [
            'title.required' => 'The course title is required.',
            'title.string' => 'The course title must be a string.',
            'title.max' => 'The course title may not be greater than 255 characters.',
            'description.string' => 'The description must be a string.',
            'category_id.required' => 'The category is required.',
            'category_id.exists' => 'The selected category is invalid.',
            'teacher_id.required' => 'The teacher is required.',
            'teacher_id.exists' => 'The selected teacher is invalid.',
            'price.required' => 'The price is required.',
            'price.numeric' => 'The price must be a number.',
            'price.min' => 'The price must be at least 0.',
            'is_published.required' => 'The publication status is required.',
            'is_published.boolean' => 'The publication status must be true or false.',
            // --- IGNORE ---
        ];
    }
}
