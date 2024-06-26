<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class blogReaquestValidation extends FormRequest
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
            'user_id' => 'required',
            'published_at' => 'required',
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|mimes:png,jpg|max:1024',
        ];
    }
}
