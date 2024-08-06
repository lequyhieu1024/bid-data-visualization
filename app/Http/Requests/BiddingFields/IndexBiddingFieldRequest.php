<?php

namespace App\Http\Requests\BiddingFields;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class IndexBiddingFieldRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'limit' => 'nullable|integer|min:1',
            'page' => 'nullable|integer|min:1',
            'name' => 'nullable|string',
            'code' => 'nullable|integer|min:1',
            'parent_name' => 'nullable|string',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'limit' => $this->query('limit'),
            'page' => $this->query('page'),
            'name' => $this->query('name'),
            'code' => $this->query('code'),
            'parent_name' => $this->query('parent_name'),
        ]);
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'result' => false,
            'message' => 'Validation error',
            'errors' => $validator->errors(),
        ], 400));
    }
}
