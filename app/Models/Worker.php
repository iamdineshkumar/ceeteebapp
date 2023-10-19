<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'Company_ID');
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id', 'Branch_ID');
    }
    public function labour()
    {
        return $this->belongsTo(Contractor_Category::class, 'labour_classification', 'Category_ID');
    }
    public function contractor()
    {
        return $this->belongsTo(ContractorMaster::class);
    }
    public function docs()
    {
        return $this->hasMany(WorkersDocs::class, 'workerId');
    }
}
