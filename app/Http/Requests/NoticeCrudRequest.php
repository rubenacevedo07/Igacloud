<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class NoticeCrudRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'     => 'required|min:5|max:255',
            'body'      => 'required|min:25|max:1500',
            'visible'   => 'boolean'
        ];
    }

}