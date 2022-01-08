<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaboratoryAnalysis extends Model
{
    use HasFactory;

    protected $fillable = ['laboratory_id', 'analysis_id', 'price'];
    protected $with = ['analysis'];

    public function analysis()
    {
        return $this->belongsTo(Analysis::class);
    }
}
