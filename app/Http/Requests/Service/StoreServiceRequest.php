<?php

namespace App\Http\Requests\Service;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'featured' => $this->input('featured') == 'on' ? true : false,
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:125'],
            'description' => ['required', 'string', 'max:140'],
            'overview' => ['required', 'string'],
            'keywords' => ['required', 'string', ''],
            'featured' => ['boolean'],
            'image' => ['required', 'image', 'mimes:png,jpg, jpeg', 'max:1024'],
        ];
    }
}
