<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | El following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'El :attribute debe ser aceptado.',
    'active_url'           => 'El :attribute no es una URL válida.',
    'after'                => 'El :attribute debe ser una fecha después de :date.',
    'after_or_equal'       => 'El :attribute debe ser una fecha después o igual a :date.',
    'alpha'                => 'El :attribute sólo puede contener letras.',
    'alpha_dash'           => 'El :attribute sólo puede contener letras, números, y guiones.',
    'alpha_num'            => 'El :attribute sólo puede contener letras y números.',
    'array'                => 'El :attribute debe ser un arreglo.',
    'before'               => 'El :attribute debe ser una fecha antes de :date.',
    'before_or_equal'      => 'El :attribute debe ser una fecha antes o igual a :date.',
    'between'              => [
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'file'    => 'El :attribute debe pesar entre :min y :max kilobytes.',
        'string'  => 'El :attribute debe contener entre :min y :max caracteres.',
        'array'   => 'El :attribute debe tener entre :min y :max objetos.',
    ],
    'boolean'              => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed'            => 'La confirmación de :attribute no concuerda.',
    'date'                 => 'El campo :attribute no es una fecha válida.',
    'date_format'          => 'El campo :attribute no concuerda con el formato :format.',
    'different'            => 'El campo :attribute y :other deben ser diferentes.',
    'digits'               => 'El campo :attribute debe tener :digits dígitos.',
    'digits_between'       => 'El campo :attribute debe tener entre :min y :max dígitos.',
    'dimensions'           => 'El campo :attribute tiene dimensiones inválidas.',
    'distinct'             => 'El campo :attribute tiene valores duplicados.',
    'email'                => 'El campo :attribute debe ser una dirección de correo electrónico válida.',
    'exists'               => 'El campo :attribute seleccionado es inválido.',
    'file'                 => 'El campo :attribute debe ser un archivo.',
    'filled'               => 'El campo :attribute tener un valor.',
    'image'                => 'El campo :attribute debe ser una imagen.',
    'in'                   => 'El campo :attribute seleccionado es inválido.',
    'in_array'             => 'El campo :attribute no debe existir en :other.',
    'integer'              => 'El campo :attribute debe ser un entero.',
    'ip'                   => 'El campo :attribute debe ser una dirección IP válida.',
    'ipv4'                 => 'El campo :attribute debe ser una dirección IPv4 válida.',
    'ipv6'                 => 'El campo :attribute debe ser una dirección IPv6 válida.',
    'json'                 => 'El campo :attribute debe ser una cadena JSON válida.',
    'max'                  => [
        'numeric' => 'El :attribute no puede ser mayor que :max.',
        'file'    => 'El :attribute no puede pesar más de :max kilobytes.',
        'string'  => 'El :attribute no puede teer más de :max caracteres.',
        'array'   => 'El :attribute no puede contener más de :max objetos.',
    ],
    'mimes'                => 'El :attribute debe ser un archivo de tipo: :values.',
    'mimetypes'            => 'El :attribute debe ser un archivo de tipo: :values.',
    'min'                  => [
        'numeric' => 'El :attribute debe ser al menos :min.',
        'file'    => 'El :attribute debe pesar al menos :min kilobytes.',
        'string'  => 'El :attribute debe tener al menos :min caracteres.',
        'array'   => 'El :attribute debe contener al menos :min objetos.',
    ],
    'not_in'               => 'El :attribute seleccionado es inválido.',
    'numeric'              => 'El :attribute debe ser un número.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El campo formate de :attribute es inválido.',
    'required'             => 'El campo :attribute es obligatorio.',
    'required_if'          => 'El campo :attribute es obligatorio cuando :other es :value.',
    'required_unless'      => 'El campo :attribute es obligatorio al menos que :other está en :values.',
    'required_with'        => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all'    => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_without'     => 'El campo :attribute es obligatorio cuando :values no está presentw.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de :values están presentes.',
    'same'                 => 'El campo :attribute y :other deben ser iguales.',
    'size'                 => [
        'numeric' => 'El :attribute debe ser :size.',
        'file'    => 'El :attribute debe pesar :size kilobytes.',
        'string'  => 'El :attribute debe tener :size caracteres.',
        'array'   => 'El :attribute debe contener :size objetos.',
    ],
    'string'               => 'El :attribute debe ser una cadena.',
    'timezone'             => 'El :attribute debe ser una zona válida.',
    'unique'               => 'El :attribute ya está en uso.',
    'uploaded'             => 'El :attribute falló al subirse.',
    'url'                  => 'El formato de :attribute es inválido.',

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
    | El following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
