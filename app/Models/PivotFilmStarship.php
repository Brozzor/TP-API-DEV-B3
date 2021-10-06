<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PivotFilmStarship extends Model
{
    use HasFactory;
    public function starship()
	{
		return $this->belongsTo(Starship::class);
	}

	public function film()
	{
		return $this->belongsTo(Film::class);
	}
}
