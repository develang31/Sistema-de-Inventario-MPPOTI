<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Model\Area;
class ValidarCampoUrl implements Rule
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
       if($value != '#'){
            $area = Area::where($attribute, $value)->get();
            return $area->isEmpty();
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
        return 'Esta url ya está asignada';
    }
}
