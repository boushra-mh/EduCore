<?php

namespace App\Http\Requests\API\Lesson;

use Illuminate\Foundation\Http\FormRequest;

class LessonRequest extends FormRequest
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
            'content' => 'nullable|string',
            'course_id' => 'required|exists:courses,id',
            'duration' => 'nullable|integer|min:0',
            'is_published' => 'required|boolean',
            // --- IGNORE ---
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'The lesson title is required.',
            'title.string' => 'The lesson title must be a string.',
            'title.max' => 'The lesson title may not be greater than 255 characters.',
            'content.string' => 'The content must be a string.',
            'course_id.required' => 'The course is required.',
            'course_id.exists' => 'The selected course is invalid.',
            'duration.integer' => 'The duration must be an integer.',
            'duration.min' => 'The duration must be at least 0.',
            'is_published.required' => 'The publication status is required.',
            'is_published.boolean' => 'The publication status must be true or false.',
            // --- IGNORE ---
        ];
    }
}
