<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
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
            'dni' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'expiration_date' => 'required|date',
            'status' => 'required|in:pending,in_progress,completed'
        ];
    }
}
