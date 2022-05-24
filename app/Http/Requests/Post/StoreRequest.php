<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Str;

class StoreRequest extends FormRequest
{

    protected function prepareForValidation()
{
    $this->merge([
        //'slug' => Str::slug($this->title)
        //esta es una manera de hacerlo cuando queremos usar tantas funciones como necesitemos
        //'slug' => Str::of($this->title)->slug()->append("-adicional"),

        //y esta es una forma mas corta de hacerlo
        'slug' => str($this->title)->slug()
    ]);
}



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
     * @return array<string, mixed>
     */
    public function rules()
    {
    //aqui se pondran los name que estan asociadoas a la BD si en la bd es "x" el name en la view sera "x"
        return [
            "title"=>"required|min:2",
              //esto indica en que tabla sera unico
            "slug"=>"required|min:5|unique:posts",
            "category_id"=>"required",
            "content"=>"required",
            "description"=>"required",
            "posted"=>"required",
        ];
    }
}
