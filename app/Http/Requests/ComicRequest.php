<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules(){
      return [
        'title' => 'required|max:255',
        'description' => 'required',
        'thumb' => 'required',
        'price' => 'required|max:255',
        'series' => 'required|max:255',
        'sale_date' => 'required|date',
        'type' => 'required|max:255',
        'artists' => 'required',
        'writers' => 'required'
      ];
    }

    public function messages(){
      return [
        'title.required' => 'Il titolo è richiesto',
        'title.max' => 'Il titolo può contenere al massimo :max caratteri',
        'description.required' => 'La descrizione è richiesta',
        'thumb.required' => 'L\'immagine è richiesta',
        'price.required' => 'Il prezzo è richiesto',
        'price.max' => 'Il prezzo può contenere al massimo :max caratteri',
        'series.required' => 'La serie è richiesta',
        'series.max' => 'Il campo titolo può contenere al massimo :max caratteri',
        'sale_date.required' => 'La data è richiesta',
        'sale_date.date' => 'La data inserita non è valida',
        'type.required' => 'Il tipo è richiesto',
        'type.max' => 'Il tipo può contenere al massimo :max caratteri',
        'artists.required' => 'Gli artisti sono richiesti',
        'writers.required' => 'Gri scrittori sono richiesti',
      ];
    }
}
