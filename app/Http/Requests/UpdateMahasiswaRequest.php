<?php

namespace App\Http\Requests;

use App\Enums\JenisKelamin;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class UpdateMahasiswaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nim' => [
                'required',
                'max:10',
                Rule::unique('mahasiswas', 'nim')->ignore($this->mahasiswa->id),
            ],
            'nama' => ['required'],
            'email' => [
                'required',
                'email',
                Rule::unique('mahasiswas', 'email')->ignore($this->mahasiswa->id),
            ],
            'jk' => ['required', new Enum(JenisKelamin::class)],
            'alamat' => ['required'],
        ];
    }
}
