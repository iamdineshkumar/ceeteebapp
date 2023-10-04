<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkersDocs extends Model
{
    use HasFactory;
    protected $table="workers_docs";
    protected $casts = [
        'date' => 'datetime:Y-m-d',
    ];
    public function worker(){
        return $this->belongsTo(Worker::class,'workerId','id');
    }
    
}
