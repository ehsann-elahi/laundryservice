<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormSubmission extends Model
{
    protected $fillable = ['form_id','participant_name','participant_contact','response_data','pdf_path'];

    protected $casts = [
        'response_data' => 'array',
    ];

    public function form()
    {
        return $this->belongsTo(Form::class);
    }
}
