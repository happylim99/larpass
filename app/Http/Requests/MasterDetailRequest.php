<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MasterDetailRequest extends FormRequest
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
            'data.productmaster.name' => 'required|max:50',
            'data.productmaster.description' => 'max:50',
            'data.productmaster.product_details.*.option_name_1' => 'max:150',
            'data.productmaster.product_details.*.option_value_1' => 'max:150',
            'data.productmaster.product_details.*.option_name_2' => 'max:150',
            'data.productmaster.product_details.*.option_value_2' => 'max:150',
            'data.productmaster.product_details.*.sku' => 'required|max:70',
            'data.productmaster.product_details.*.stocks' => 'integer|max:150',
            'data.productmaster.product_details.*.stocks' => 'regex:/^[0-9]+(\.[0-9][0-9]?)?$/',

        ];
    }
}
