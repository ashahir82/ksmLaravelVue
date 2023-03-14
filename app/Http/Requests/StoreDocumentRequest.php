<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDocumentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required|min:3|max:10',
            'nama_penulis' => 'required|min:3|max:10',
            'tarikh_diterbitkan' => 'required',
            'nama_pelulus' => 'required|min:3|max:10',
            'tarikh_disahkan' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Ruang fail adalah wajib untuk dilengkapkan',
            'nama_penulis.required' => 'Ruang nama penulis adalah wajib untuk dilengkapkan',
            'tarikh_diterbitkan.required' => 'Ruang tarikh diterbitkan adalah wajib untuk dilengkapkan',
            'nama_pelulus.required' => 'Ruang nama pelulus adalah wajib untuk dilengkapkan',
            'tarikh_disahkan.required' => 'Ruang tarikh disahkan adalah wajib untuk dilengkapkan',
            'name.min' => 'Nama fail adalah minima 3 huruf',
            'name.max' => 'Nama fail adalah maksima 10 huruf',
            'nama_penulis.min' => 'Nama penulis adalah minima 3 huruf',
            'nama_penulis.max' => 'Nama penulis adalah maksima 10 huruf',
            'nama_pelulus.min' => 'Nama pelulus adalah minima 3 huruf',
            'nama_pelulus.max' => 'Nama pelulus adalah maksima 10 huruf',
        ];
    }
}
