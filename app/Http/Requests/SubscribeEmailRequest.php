<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SubscribeEmailRequest extends FormRequest
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
            'full_name' => ['required', 'string','min:3'],
            'email' => ['required', 'email', Rule::unique('subscribe_emails')->ignore($this->subscribe_email)],
            'phone' => ['required', 'regex:/(01)[0-9]{9}/','digits:11'],
        ];
    }
}
