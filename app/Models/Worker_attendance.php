<?php

namespace App\Models;

use App\Models\Masters\Ceetee_usercreation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker_attendance extends Model
{
    use HasFactory;
    protected $table='worker_attendance';
    public function user()
    {
        return $this->belongsTo(Ceetee_usercreation::class, 'userid', 'id');
    }
    public function worker()
    {
        return $this->belongsTo(Worker::class, 'userid', 'id');
    }
    public function work_types()
    {
        return $this->belongsTo(Contractor_Category::class, 'work_type', 'Category_ID');
    }
    public function units()
    {
        return $this->belongsTo(Booking_Details::class, 'unit', 'Booking_ID');
    }
    public function contractor()
    {
        return $this->belongsTo(ContractorMaster::class,'contractor_id','id');
    }
}
