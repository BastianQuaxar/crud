<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Str;

class PutRequest extends FormRequest
{

    public function rules()
    {
    //aqui se pondran los name que estan asociadoas a la BD si en la bd es "x" el name en la view sera "x"
        return [
            "title"=>"required|min:2",
              //esto indica en que tabla sera unico
            //"slug"=>"required|min:5|unique:posts",
            "category_id"=>"required",
            "content"=>"required",
            "description"=>"required",
            "posted"=>"required",
        ];
    }
}
