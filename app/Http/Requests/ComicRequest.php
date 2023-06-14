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
        'description' => 'required|min:5',
        'thumb' => 'required|min:5',
        'price' => 'required|numeric|min:0.49|max:999.99',
        'series' => 'required|min:5|max:255',
        'sale_date' => 'required|date',
        'type' => 'required|min:5|max:255',
        'artists' => 'required|min:5',
        'writers' => 'required|min:5'
      ];
    }

    public function messages(){
      return [
        'title.required' => 'Il titolo è richiesto',
        'title.max' => 'Il titolo può contenere al massimo :max caratteri',
        'description.required' => 'La descrizione è richiesta',
        'description.min' => 'La descrizione deve avere almeno :min caratteri',
        'thumb.required' => 'L\'immagine è richiesta',
        'thumb.min' => 'L\'immagine deve avere almeno :min caratteri',
        'price.required' => 'Il prezzo è richiesto',
        'price.numeric' => 'Il prezzo deve essere un numero',
        'price.min' => 'Il prezzo deve avere un valore minimo di :min',
        'price.max' => 'Il prezzo può avere un valore massimo di :max',
        'series.required' => 'La serie è richiesta',
        'series.min' => 'La serie deve avere almeno :min caratteri',
        'series.max' => 'La serie può contenere al massimo :max caratteri',
        'sale_date.required' => 'La data è richiesta',
        'sale_date.date' => 'La data inserita non è valida',
        'type.required' => 'Il tipo è richiesto',
        'type.min' => 'Il tipo deve avere almeno :min caratteri',
        'type.max' => 'Il tipo può contenere al massimo :max caratteri',
        'artists.required' => 'Gli artisti sono richiesti',
        'artists.min' => 'Il campo artisti deve avere almeno :min caratteri',
        'writers.required' => 'Gli scrittori sono richiesti',
        'writers.min' => 'Il campo scrittori deve avere almeno :min caratteri',
      ];
    }
}
