<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
    public function rules()
    {
        return [
            'title' => 'required|max:255|min:1',
            'description' => 'required|max:255|min:1',
            'thumb' => 'required|max:255|min:1',
            'price' => 'required|numeric|integer|max_digits:10|min:1',
            'series' => 'required|max:255|min:1',
            'sale_date' => 'required|date',
            'type' => 'required|max:255|min:1',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'E\' necessario inserire un titolo',
            'title.max' => 'Hai inserito troppi caratteri, riduci la dimensione del testo',
            'description.required' => 'E\' necessario inserire una descrizione',
            'description.max' => 'Hai inserito troppi caratteri, riduci la dimensione del testo',
            'thumb.required' => 'E\' necessario inserire un link ad una immagine',
            'thumb.max' => 'Hai inserito troppi caratteri, riduci la dimensione del testo',
            'price.required' => 'E\' necessario inserire un costo',
            'price.numeric' => 'Inserire un valore numerico',
            'series.required' => 'E\' necessario inserire un nome per la serie',
            'series.max' => 'Hai inserito troppi caratteri, riduci la dimensione del testo',
            'sale_date.required' => 'E\' necessario inserire una data di inizio vendite',
            'sale_date.date' => 'Inserisci una data in formato DD/MM/YYYY',
            'type.required' => 'E\' necessario inserire una tipologia per il fumetto',
            'type.max' => 'Hai inserito troppi caratteri, riduci la dimensione del testo',
        ];
    }
}
