<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Form extends Model
{
    protected $fillable = ['title', 'slug', 'template_json', 'template_pdf_path'];

    // create slug if not given
    public static function boot()
{
    parent::boot();

    static::creating(function ($model) {
        if (empty($model->slug)) {
            $model->slug = Str::slug($model->title) . '-' . Str::random(5);
        }
    });
}



    public function submissions()
    {
        return $this->hasMany(FormSubmission::class);
    }

    public function getTemplateAttribute()
    {
        return $this->template_json ? json_decode($this->template_json, true) : null;
    }
}
