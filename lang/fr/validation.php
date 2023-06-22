<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Le following language lines contenir Le default error messages used by
    | Le validator class. Some of Lese rules have multiple versions such
    | as Le size rules. Feel free to tweak each of Lese messages here.
    |
    */

    'accepted' => 'Le :attribute doit être accepté.',
    'accepted_if' => 'Le :attribute doit être accepté quet :oLer est :value.',
    'active_url' => 'Le :attribute n\'est pas une URL valid.',
    'after' => 'Le :attribute doit être une date après :date.',
    'after_or_equal' => 'Le :attribute doit être a date after ou égal à :date.',
    'alpha' => 'Le :attribute doit seulement contenir des lettres.',
    'alpha_dash' => 'Le :attribute doit seulement contenir des lettres, chiffres, signes et underscores.',
    'alpha_num' => 'Le :attribute doit seulement contenir des lettres et chiffres.',
    'array' => 'Le :attribute doit être une liste.',
    'before' => 'Le :attribute doit être une date avant :date.',
    'before_or_equal' => 'Le :attribute doit être une date avant ou égal à :date.',
    'between' => [
        'array' => 'Le :attribute doit être entre :min et :max items.',
        'file' => 'Le :attribute doit être entre :min et :max kilobytes.',
        'numeric' => 'Le :attribute doit être entre :min et :max.',
        'string' => 'Le :attribute doit être entre :min et :max characters.',
    ],
    'boolean' => 'Le :attribute dommaine doit être vrai ou faux.',
    'confirmed' => 'Le :attribute confirmation ne correspond pas.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date' => 'Le :attribute n\'est pas une date valid.',
    'date_equals' => 'Le :attribute doit être une date égal à :date.',
    'date_format' => 'Le :attribute ne correspond pas au format :format.',
    'declined' => 'Le :attribute doit être decliné.',
    'declined_if' => 'Le :attribute doit être decliné quand :other est :value.',
    'different' => 'Le :attribute et :other doit être différent.',
    'digits' => 'Le :attribute doit être :digits digitals.',
    'digits_between' => 'Le :attribute doit être entre :min et :max digitals.',
    'dimensions' => 'Le :attribute a des dimensions d\'image invalides.',
    'distinct' => 'Le :attribute champs a une valeur dupliqué.',
    'doesnt_start_with' => 'Le :attribute ne doit pas commencer avec un des following: :values.',
    'email' => 'Le :attribute doit être une address email valid.',
    'ends_with' => 'Le :attributedoit terminer avec un des following: :values.',
    'enum' => 'Le selectionné :attribute est invalide.',
    'exists' => 'Le selectionné :attribute est invalide.',
    'file' => 'Le :attribute doit être un fichier.',
    'filled' => 'Le :attribute champs doit avoir une valeur.',
    'gt' => [
        'array' => 'Le :attribute doit avoir plus que :value items.',
        'file' => 'Le :attribute doit être plus grand :value de kilobytes.',
        'numeric' => 'Le :attribute doit être plus grand :value.',
        'string' => 'Le :attribute doit être plus grand :value de characters.',
    ],
    'gte' => [
        'array' => 'Le :attribute doit avoir :value items or more.',
        'file' => 'Le :attribute doit être plus grand ou égal à :value kilobytes.',
        'numeric' => 'Le :attribute doit être plus grand ou égal à :value.',
        'string' => 'Le :attribute doit être plus grand ou égal à :value characters.',
    ],
    'image' => 'Le :attribute doit être une image.',
    'in' => 'Le selected :attribute est invalide.',
    'in_array' => 'Le :attribute champs n\'existe pas dans :other.',
    'integer' => 'Le :attribute doit être un entier.',
    'ip' => 'Le :attribute doit être une valide address IP.',
    'ipv4' => 'Le :attribute doit être une valide address IPv4.',
    'ipv6' => 'Le :attribute doit être une valide address IPv6.',
    'json' => 'Le :attribute doit être une valide string JSON.',
    'lt' => [
        'array' => 'Le :attribute doit avoir moins que :value items.',
        'file' => 'Le :attribute doit être moins que :value kilobytes.',
        'numeric' => 'Le :attribute doit être moins que :value.',
        'string' => 'Le :attribute doit être moins que :value characters.',
    ],
    'lte' => [
        'array' => 'Le :attribute doit pas avoir plus que :value items.',
        'file' => 'Le :attribute doit être moins que ou égal à :value kilobytes.',
        'numeric' => 'Le :attribute doit être moins que ou égal à :value.',
        'string' => 'Le :attribute doit être moins que ou égal à :value characters.',
    ],
    'mac_address' => 'Le :attribute doit être une valide address MAC.',
    'max' => [
        'array' => 'Le :attribute doit pas avoir plus que :max items.',
        'file' => 'Le :attribute doit pas être plus grand :max kilobytes.',
        'numeric' => 'Le :attribute doit pas être plus grand :max.',
        'string' => 'Le :attribute doit pas être plus grand :max characters.',
    ],
    'mimes' => 'Le :attribute doit être un fichier de type: :values.',
    'mimetypes' => 'Le :attribute doit être un fichier de type: :values.',
    'min' => [
        'array' => 'Le :attribute doit avoir au moins :min items.',
        'file' => 'Le :attribute doit être au moins :min kilobytes.',
        'numeric' => 'Le :attribute doit être au moins :min.',
        'string' => 'Le :attribute doit être au moins :min characters.',
    ],
    'multiple_of' => 'Le :attribute doit être un multiple de :value.',
    'not_in' => 'Le selectionné :attribute est invalide.',
    'not_regex' => 'Le :attribute format est invalide.',
    'numeric' => 'Le :attribute doit être un numbre.',
    'password' => [
        'letters' => 'Le :attribute must contenir au moins une lettre.',
        'mixed' => 'Le :attribute must contenir au moins une lettre majuscule et munuscule.',
        'numbers' => 'Le :attribute must contenir au moins un numbre.',
        'symbols' => 'Le :attribute must contenir au moins un symbol.',
        'uncompromised' => 'La donné :attribute a apparu dans une donné leak. s\'il vous plait choisir une différente :attribute.',
    ],
    'present' => 'Le :attribute champs doit être present.',
    'prohibited' => 'Le :attribute champs est prohibé.',
    'prohibited_if' => 'Le :attribute champs est prohibé quand :other est :value.',
    'prohibited_unless' => 'Le :attribute champs is prohibited unless :other est en :values.',
    'prohibits' => 'Le :attribute champs prohibe :other d\'être present.',
    'regex' => 'Le :attribute format est invalide.',
    'required' => 'Le :attribute champs est obligatoire.',
    'required_array_keys' => 'Le :attribute champs doit contenir entrées for: :values.',
    'required_if' => 'Le :attribute champs est obligatoire quand :other est :value.',
    'required_unless' => 'Le :attribute champs est obligatoire sauf si :other est en :values.',
    'required_with' => 'Le :attribute champs est obligatoire quand :values est present.',
    'required_with_all' => 'Le :attribute champs est obligatoire quand :values sont present.',
    'required_without' => 'Le :attribute champs est obligatoire quand :values n\'est pas present.',
    'required_without_all' => 'Le :attribute champs est obligatoire quand aucune des :values sont present.',
    'same' => 'Le :attribute et :other doit correspondre.',
    'size' => [
        'array' => 'Le :attribute doit contenir :size items.',
        'file' => 'Le :attribute doit être :size kilobytes.',
        'numeric' => 'Le :attribute doit être :size.',
        'string' => 'Le :attribute doit être :size characters.',
    ],
    'starts_with' => 'Le :attribute doit commencer avec un des following: :values.',
    'string' => 'Le :attribute doit être un string.',
    'timezone' => 'Le :attribute doit être une valide timezone.',
    'unique' => 'Le :attribute a déjà été pris.',
    'uploaded' => 'Le :attribute échoué la mise à jour.',
    'url' => 'Le :attribute doit être une valide URL.',
    'uuid' => 'Le :attribute doit être une valide UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using Le
    | convention "attribute.rule" to name Le lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | Le following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
