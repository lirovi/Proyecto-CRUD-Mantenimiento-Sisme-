<?php

namespace Sisme\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MantenimientoRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            //
            'equipo_id' => 'required'
            'fun_id' => 'required'
            'tecnico_id' => 'required'
            'tipoman_id' => 'required'
            'diag_id' => 'required'
            'fechadiag_id' => 'required'
            
        ];
    }
}
