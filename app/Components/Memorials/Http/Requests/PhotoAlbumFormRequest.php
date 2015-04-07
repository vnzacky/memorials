<?php namespace App\Components\Memorials\Http\Requests;

use App\Http\Requests\Request;

class PhotoAlbumFormRequest extends Request
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

        $rules = [
            'title'     =>  'required',
            'description'   =>  'required|min:10'
        ];

        return $rules;
    }


}
