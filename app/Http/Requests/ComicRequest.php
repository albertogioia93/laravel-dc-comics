<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // tutti sono autorizzati
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // MODIFICARE QUESTI DATI
            'thumb' => 'nullable|url|max:255|ends_with:png,jpg,webp',
            'title' => 'required|max:100',
            'description' => 'required',
            'price' => 'required|numeric|decimal:2',
            'series' => 'required|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|max:50',
            'artists' => 'required',
            'writers' => 'required',
            
            
         ];
    }


    public function messages(){

        $obbligatorio =  ':attribute è obbligatorio.';

        return [
            'title' =>  $obbligatorio,
            'description' =>  $obbligatorio,
            'price' =>  $obbligatorio,
            'series' =>  $obbligatorio,
            'sale_date' =>  $obbligatorio,
            'type' =>  $obbligatorio,
            'artists' =>  $obbligatorio,
            'writers' =>  $obbligatorio,
            
        ];
    }
}
