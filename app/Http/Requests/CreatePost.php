<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePost extends FormRequest
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
        if ($this->getRequestUri() === "/posts") {
            return [
                'title' => 'required|unique:posts',
                'content' => 'required|min:20',
                'image' => 'required|image|mimes:png,jpg,webp|max:2048',
            ];
        }
//        dd($this->post->id);
        return [
            'title' => 'required|unique:posts,title,' .$this->post->id,
            'content' => 'required|min:20',
            'image' => 'image|mimes:png,jpg,webp|max:2048',
        ];

    }
}
