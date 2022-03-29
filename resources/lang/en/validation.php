
<?php

return [

 /*
    |--------------------------------------------------------------------------
    | Validation language lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | For what purpose? Some of these rules have multiple versions, e.g.
    | like the size rules, for example. You can customize any of these messages here.
    |
    */

    'accepted' => ':attribute must be accepted.',
    'active_url' => ':attribute is not a valid URL',
    'after' => ':attribute must have a date before :date',
    'after_or_equal' => ':attribute must have exact date or before :date',
    'alpha' => ':attribute can only contain letters',
    'alpha_dash' => ':attribute can contain only letters, underscores',
    'alpha_num' => ':attribute can contain only letters and numbers.',
    'array' => ':attributemust be an array',
    'before' => ':attribute must have a date before :date',
    'before_or_equal' => ':attribute must have exact date or before :date.',
    'between' => [
        'numeric' => ':attribute must be between :min and :max',
        'file' => ':attribute must be between :min and :max kilobytes.',
        'string' => ':attribute must be between :min and :max characters.',
        'array' => ':attribute must be between :min and :max things',
    ],
    'boolean' => ':attribute can contain true or false content.',
    'confirmed' => ':attribute confirmation is not consistent with',
    'date' => ':attribute date is not verified.',
    'date_equals' => ':attribute must have date :date.',
    'date_format' => ':attribute has invalid format :format',
    'different' => ':attribute and :other must be different',
    'digits' => ":attribute must have :digits characters.",
    'digits_between' => ':attribute must have between :min and :max characters',
    'dimensions' => 'The :attribute has invalid image dimensions',
    'distinct' => 'The :attribute field has duplicate value',
    'email' => 'The :attribute must be a valid email address',
    'ends_with' => 'attribute :must end with one of the following: :values.',
    'exists' => 'The selected :attribute is invalid',
    'file' => 'attribute :must be a file',
    'filled' => 'The :attribute field must have a value',
    'gt' => [
        'numeric' => 'The value of :attribute must be greater than :value',
        'file' => 'The :attribute value must be greater than :value kilobytes.',
        'string' => 'Value of :attribute must be greater than :value characters',
        'array' => 'attribute :attribute must have more than :value characters',
    ],
    'gte' => [
        'numeric' => 'attribute :attribute must be greater than or equal to :value.',
        'file' => 'attribute :must be greater than or equal to :value kilobytes.',
        'string' => 'attribute :must be greater than or equal to :value characters',
        'array' => ':attribute must be :value characters or greater',
    ],
    'image' => ':attribute must be an image',
    'in' => 'The selected :attribute is invalid',
    'in_array' => 'The :attribute field does not exist in :other',
    'integer' => ':attribute must be an integer',
    'ip' => ':attribute must be a valid IP address',
    'ipv4' => ':attribute must be a valid IPv4 address.',
    'ipv6' => ":attribute must be a valid IPv6 address.",
    'json' => ':attribute must be a valid JSON string',
    'lt' => [
        'numeric' => 'The value of :attribute must be less than :value',
        'file' => 'Value of :attribute must be less than :value kilobytes',
        'string' => 'The :attribute value must be less than :value characters',
        'array' => 'The :attribute must have less than :value items',
    ],
    'lte' => [
        'numeric' => 'The :attribute must have less than or equal to :value',
        'file' => 'Value of :attribute must have less than or equal to :value kilobytes',
        'string' => 'Value of :attribute must be less than or equal to characters :value.',
        'array' => ':attribute must not have more than :value characters',
    ],
    'max' => [
        'numeric' => 'The value of :attribute must not be greater than :max',
        'file' => 'attribute :cannot be greater than :max kilobytes.',
        'string' => 'The value of :attribute cannot be greater than :max characters',
        'array' => ':attribute cannot have more than :max elements',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute value must be at least :min',
        'file' => ':attribute must be at least :min kilobytes.',
        'string' => ':attribute must be at least :min characters.',
        'array' => ':attribute must have at least :min elements',
    ],
    'not_in' => 'The selected :attribute is invalid',
    'not_regex' => 'The format of :attribute is invalid',
    'numeric' => 'attribute :must be a number',
    'password' => 'The password is incorrect',
    'present' => 'The :attribute field must be present',
    'regex' => 'The :attribute format is incorrect',
    'required' => 'The :attribute field is required',
    'required_if' => 'The :attribute field is required when :other is :value.',
 'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values is present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of the :values are present.',
    'same' => 'attribute and :other must match',
    'size' => [
        'numeric' => ':attribute must be :size',
        'file' => ':attribute must be :size kilobytes',
        'string' => ':attribute must be :size characters.',
        'array' => ':attribute must contain :size elements',
    ],
    'starts_with' => ':attribute must start with one of the following: :values.',
    'string' => ':attribute must be a string',
    'timezone' => 'The :attribute must be a valid zone',
    'unique' => ':attribute was already taken',
    'uploaded' => ':attribute failed to upload',
    'url' => 'Format :attribute is invalid',
    'uuid' => 'attribute :must be a valid UUID',

    /*
    |--------------------------------------------------------------------------
    | Custom validation language lines
    |--------------------------------------------------------------------------
    |
    | Here you can specify custom validation messages for attributes using the
    | | "atrubut.rule" convention to name lines. This allows you to quickly
    | Specifies a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
  /*
    |--------------------------------------------------------------------------
    | Custom validation attributey
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to replace our placeholder attribute
    | with something more reader-friendly, such as "email address" instead of
    | "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];


