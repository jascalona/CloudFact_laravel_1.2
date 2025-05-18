<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lgenals extends Model
{

    public function alquilers()
    {
        return $this->hasOne(Alquilers::class, 'n_contract', 'n_contract');

    }

}
