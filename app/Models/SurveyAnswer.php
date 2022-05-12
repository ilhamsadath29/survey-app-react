<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SurveyAnswer extends Model
{
    use HasFactory;
    
    // public $timestamp = false;
    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $fillable = ['survey_id', 'start_date', 'end_date'];

    
    /**
     * Get the user that owns the SurveyAnswer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function survey(): BelongsTo
    {
        return $this->belongsTo(Survey::class);
    }
}
