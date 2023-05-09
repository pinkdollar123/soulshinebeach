<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

use function GuzzleHttp\Promise\queue;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'email'=>'required|email|',
            'password'=>'required|min:10'
        ];
    }
    
    public function getCredentials()
    {
        # code...
        $email = $this->get('email');

        if ($this->isEmail($email))
        {
            return ['email'=>$email,
                    'password'=>$this->get('password')
                ];
        }

        return $this->only('email', 'password');
    }

    private function isEmail($param)
    {
        # code...
        $factory = $this->container->make(ValidationFactory::class);
        return !$factory->make(['email'=> $param], ['email'=> 'email'])->fails();
    }

}
