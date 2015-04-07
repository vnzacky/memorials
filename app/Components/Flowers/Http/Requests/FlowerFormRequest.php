<?php namespace App\Components\Flowers\Http\Requests;

use App\Http\Requests\Request;

class FlowerFormRequest extends Request
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
        if ($this->method() == 'PUT') {
            $image = 'image';
        } else {
            $image = 'required|image';
        }

        return [
            'title'     =>  'required',
            'image'     =>  $image,
            'price'     =>  'required|numeric',
            'stock'     =>  'numeric'
        ];
    }

}
