<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PivotPeopleVehicle extends Model
{
	use HasFactory;

	public function people()
	{
		return $this->belongsTo(People::class);
	}

	public function vehicle()
	{
		return $this->belongsTo(Vehicle::class);
	}
}
