<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;
use App\Models\Demandeinscription;

class StoreDemandeinscriptionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        $demandeinscription = Demandeinscription::find($this->route('demandeinscription.update'));

        return $demandeinscription && ($this->user()->hasRole('employe')->can('update', $demandeinscription) || $this->user()->hasRole('stagiaire')->can('update', $demandeinscription));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|nom',
            'prénom' => 'required|prénom',
            'poste' => 'required|poste',
            'sujet' => 'required|sujet',
            'email' => 'required|email',
            'telephone' => 'required|telephone',
            'contenu' => 'required|max:1000',
        ];
    }

    public function withValidator(Validator $validator): void
    {
        $validator->after(function(Validator $validator) {
            if($this->somethingElseIsInvalid()){
                $validator->errors()->add('field', 'Quelque chose ne va pas avec ce champs');
            }
        });
    }

    protected $stopOnFirstFailure = true;

    protected $redirectRoute = 'demandeinscription.index';


}
