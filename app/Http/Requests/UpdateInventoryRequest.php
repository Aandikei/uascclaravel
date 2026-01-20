<?php

namespace App\Http\Requests;

use App\Enums\Kondisi;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class UpdateInventoryRequest extends FormRequest
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
            'nama' => [ 'required'],
            'kode' => ['required', Rule::unique('inventories', 'kode')->ignore($this->inventory->id)],
            'stok' => [ 'required'],
            'lokasi' => ['required'],
            'kondisi' => ['required', new Enum(Kondisi::class)],
            'petugas' => ['required'],
        ];
    }
}
