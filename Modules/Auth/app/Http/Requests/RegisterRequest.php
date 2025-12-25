<?php

namespace Modules\Auth\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Auth\Models\User;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        $user_table_name = (new User)->getTable();
        return [
            'username' => ['required', 'string', 'min:5', 'max:255', 'unique:'. $user_table_name .',username'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'. $user_table_name .',email'],
            'password' => ['required', 'string', 'min:8', 'max:20', 'confirmed'],
        ];
    }
}
