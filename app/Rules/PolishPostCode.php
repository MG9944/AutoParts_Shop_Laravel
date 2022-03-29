<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PolishPostCode implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $this->checkPostCode($value);
    }

    private function checkPostCode(?string $string): bool
    {
        if ($string === null) {
            return false;
        }

        if (!preg_match('/^[0-9]{2}-?[0-9]{3}$/Du', $string)) {
            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Zly format kodu pocztowego';
    }
}
