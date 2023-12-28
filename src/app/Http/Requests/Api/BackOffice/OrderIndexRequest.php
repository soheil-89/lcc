<?php

namespace App\Http\Requests\Api\BackOffice;

use App\Models\enums\OrderStatusEnum;
use App\Rules\CheckMinRule;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OrderIndexRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'status' => ['nullable', Rule::enum(OrderStatusEnum::class)],
            'national_code' => 'nullable',
            'amount.min' => 'nullable',
            'amount.max' => ['nullable', new CheckMinRule]
        ];
    }
}
