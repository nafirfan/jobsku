<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'location' => ['nullable', 'string', 'max:100'],
            'phone' => ['nullable', 'string', 'max:15'],
            'current_job' => ['nullable', 'string', 'max:50'],
            'designation' => ['nullable', 'string', 'max:50'],
            'img_profile' => ['nullable', 'image', 'mimes:png,jpg,jpeg', 'max:1024'],
        ];
    }
}
