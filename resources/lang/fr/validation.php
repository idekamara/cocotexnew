<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'l\'attribut :attribute doit être accepté.',
    'active_url' => 'L’attribut :attribute n’est pas une URL valide.',
    'after' => 'L\'attribut :attribute doit être une date postérieure à :date.',
    'after_or_equal' => 'L’attribut :attribute doit être une date aprés ou égale à :date.',
    'alpha' => 'L\'attribut :attribute ne peut contenir que des lettres.',
    'alpha_dash' => 'L’attribut :attribute ne peut contenir que des lettres, des chiffres, des tirets et des traits de soulignement.',
    'alpha_num' => 'L’attribut :attribute ne peut contenir que des lettres et des chiffres.',
    'array' => 'L\'attribut :attribute doit être un tableau.',
    'before' => 'L\'attribut :attribute doit être une date antérieure à :date.',
    'before_or_equal' => 'L’attribut :attribute doit être une date antérieure ou égale à :date.',
    'between' => [
        'numeric' => 'L\'attribut :attribute doit être compris entre :min et :max.',
        'file' => 'L\'attribut :attribute doit être compris entre :min et :max kilo-octets.',
        'string' => 'L\'attribut :attribute doit être compris entre :min et :max caractères.',
        'array' => 'L\'attribut :attribute doit avoir entre :min et :max items.',
    ],
    'boolean' => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed' => 'La confirmation d\'attribut :attribute ne correspond pas.',
    'date' => 'L\'attribut :attibute n\'est pas une date valide.',
    'date_equals' => 'L’attribut: doit être une date égale à: date.',
    'date_format' => 'TL’attribut: ne correspond pas au format: format.',
    'different' => 'Les attributs :attributes et autres doivent être différents.',
    'digits' => 'L’attribut :attribute doit être :digits digits.',
    'digits_between' => 'L’attribut: doit être compris entre :min et :max digits.',
    'dimensions' => 'L\'attribut: a des dimensions d\'image non valides.',
    'distinct' => 'Le champ :attribut a une valeur en double.',
    'email' => 'L\'attribut :attribut doit être une adresse email valide.',
    'ends_with' => 'L’attribut :attribute doit se terminer par l’un des éléments suivants :values',
    'exists' => 'L\'attribut :attribute sélectionné est invalide.',
    'file' => 'L’attribut :attribute doit être un fichier.',
    'filled' => 'Le champ d\'attribut :attribute doit avoir une valeur.',
    'gt' => [
        'numeric' => 'L\'attribut :attribute doit être supérieur à :value.',
        'file' => 'L’attribut :attribute doit être supérieur à :value kilo-octets.',
        'string' => 'L\'attribut :attribute doit être supérieur à :value caractères.',
        'array' => 'L\'attribut :attribute doit avoir plus de :value éléments.',
    ],
    'gte' => [
        'numeric' => 'L\'attribut :attribute doit être supérieur ou égal à :value.',
        'file' => 'L’attribut ":attribute" doit être supérieur ou égal à :value kilo-octets.',
        'string' => 'L\'attribut ":attribute" doit être supérieur ou égal à :vallue caractères.',
        'array' => 'L\'attribut ":attribute" doit avoir :value éléments plus.',
    ],
    'image' => 'L\'attribut :attribute doit être une image.',
    'in' => 'L\'attribut :attribute sélectionné est invalide.',
    'in_array' => 'Le champ :attribute n’existe pas dans :other.',
    'integer' => 'L\'attribut :attribute doit être un entier.',
    'ip' => 'L\'attribut :attribute doit être une adresse IP valide.',
    'ipv4' => 'L’attribut :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'L’attribut :attribute doit être une adresse IPv6 valide.',
    'json' => 'L’attribut :attribute doit être une chaîne JSON valide.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'Le champ ":attribute" est obligatoire.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'Th:attributee :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
