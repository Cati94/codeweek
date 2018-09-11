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

    'accepted'             => ':attribute skal accepteres.',
    'active_url'           => ':attribute er ikke en gyldig URL.',
    'after'                => ':attribute skal vćre en dato efter :date.',
    'after_or_equal'       => ':attribute skal vćre en dato efter eller lig med :date.',
    'alpha'                => ':attribute mĺ kun indeholde bogstaver.',
    'alpha_dash'           => ':attribute mĺ kun indeholde bogstaver, tal og streger.',
    'alpha_num'            => ':attribute mĺ kun indeholde bogstaver og tal.',
    'array'                => ':attribute skal vćre et omrĺde.',
    'before'               => ':attribute skal vćre en dato fřr :date.',
    'before_or_equal'      => ':attribute skal vćre en dato fřr eller lig med :date.',
    'between'              => [
        'numeric' => ':attribute skal vćre mellem :min og :max.',
        'file'    => ':attribute skal vćre mellem :min og :max kilobyte.',
        'string'  => ':attribute skal vćre mellem :min og :max tegn.',
        'array'   => ':attribute skal have mellem :min og :max elementer.',
    ],
    'boolean'              => 'Feltet :attribute skal vćre sandt eller falsk.',
    'confirmed'            => 'Bekrćftelsen af :attribute matcher ikke.',
    'date'                 => ':attribute er ikke en gyldig dato.',
    'date_format'          => ':attribute matcher ikke formatet :format.',
    'different'            => ':attribute og :other skal vćre forskellige.',
    'digits'               => ':attribute skal vćre :digits cifre.',
    'digits_between'       => ':attribute skal have mellem :min og :max cifre.',
    'dimensions'           => ':attribute har ugyldige billeddimensioner.',
    'distinct'             => 'Feltet :attribute har en duplikeret vćrdi.',
    'email'                => ':attribute skal vćre en gyldig e-mailadresse.',
    'exists'               => 'Den/det valgte :attribute er ugyldig(t).',
    'file'                 => ':attribute skal vćre en fil.',
    'filled'               => 'Feltet :attribute skal have en vćrdi.',
    'image'                => ':attribute skal vćre et billede.',
    'in'                   => 'Den/det valgte :attribute er ugyldig(t).',
    'in_array'             => 'Feltet :attribute findes ikke i :other.',
    'integer'              => ':attribute skal vćre et heltal.',
    'ip'                   => ':attribute skal vćre en gyldig IP-adresse.',
    'ipv4'                 => ':attribute skal vćre en gyldig IPv4-adresse.',
    'ipv6'                 => ':attribute skal vćre en gyldig IPv6-adresse.',
    'json'                 => ':attribute skal vćre en gyldig JSON-streng.',
    'max'                  => [
        'numeric' => ':attribute mĺ ikke vćre střrre end :max.',
        'file'    => ':attribute mĺ ikke vćre střrre end :max kilobyte.',
        'string'  => ':attribute mĺ ikke vćre pĺ over :max tegn.',
        'array'   => ':attribute mĺ ikke have mere end :max elementer.',
    ],
    'mimes'                => ':attribute skal vćre en fil af typen: :values.',
    'mimetypes'            => ':attribute skal vćre en fil af typen: :values.',
    'min'                  => [
        'numeric' => ':attribute skal vćre mindst :min.',
        'file'    => ':attribute skal vćre mindst :min kilobyte.',
        'string'  => ':attribute skal have mindst :min tegn.',
        'array'   => ':attribute skal have mindst :min elementer.',
    ],
    'not_in'               => 'Den/det valgte :attribute er ugyldig(t).',
    'not_regex'            => ':attribute-formatet er ugyldigt.',
    'numeric'              => ':attribute skal vćre et tal.',
    'present'              => 'Feltet :attribute skal vćre til stede.',
    'regex'                => ':attribute-formatet er ugyldigt.',
    'required'             => 'Feltet :attribute er obligatorisk.',
    'required_if'          => 'Feltet :attribute er obligatorisk, nĺr :other er :value.',
    'required_unless'      => 'Feltet :attribute er obligatorisk, medmindre :other er i :values.',
    'required_with'        => 'Feltet :attribute er pĺkrćvet, nĺr :values er til stede.',
    'required_with_all'    => 'Feltet :attribute er pĺkrćvet, nĺr :values er til stede.',
    'required_without'     => 'Feltet :attribute er obligatorisk, nĺr :values ikke er til stede.',
    'required_without_all' => 'Feltet :attribute er obligatorisk, nĺr ingen af :values er til stede.',
    'same'                 => ':attribute og :other skal matche.',
    'size'                 => [
        'numeric' => ':attribute skal vćre :size.',
        'file'    => ':attribute skal vćre :size kilobyte.',
        'string'  => ':attribute skal vćre pĺ :size tegn.',
        'array'   => ':attribute skal indeholde :size elementer.',
    ],
    'string'               => ':attribute skal vćre en streng.',
    'timezone'             => ':attribute skal vćre en gyldig zone.',
    'unique'               => ':attribute er allerede taget.',
    'uploaded'             => ':attribute blev ikke uploadet.',
    'url'                  => ':attribute-formatet er ugyldigt.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
