<?php

namespace App\Http\Controllers;

use App\Models\PivotPeoplePlanet;
use App\Models\PivotPlanetFilm;
use App\Models\Planet;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
	public function index($planet_id)
	{
		$planet = Planet::find($planet_id);
		$planet['url'] = route('planet', $planet_id);

		// Peoples
		$peoples = PivotPeoplePlanet::where('planet_id', $planet_id)->get();
		$peopleArray = [];
		foreach ($peoples as $people) {
			$peopleArray[] = route('people', $people->people_id);
		}
		$planet['residents'] = $peopleArray;

		// Films
		$films = PivotPlanetFilm::where('planet_id', $planet_id)->get();
		$filmsArray = [];
		foreach ($films as $film) {
			$filmsArray[] = route('film', $film->film_id);
		}
		$planet['films'] = $filmsArray;

		return response()->json($planet);
	}

	public function show()
	{
		$planets = Planet::all();

		foreach ($planets as $planet) {
			$planet_id = $planet->id;
			$planet['url'] = route('planet', $planet_id);

			// Peoples
			$peoples = PivotPeoplePlanet::where('planet_id', $planet_id)->get();
			$peopleArray = [];
			foreach ($peoples as $people) {
				$peopleArray[] = route('people', $people->people_id);
			}
			$planet['residents'] = $peopleArray;

			// Films
			$films = PivotPlanetFilm::where('planet_id', $planet_id)->get();
			$filmsArray = [];
			foreach ($films as $film) {
				$filmsArray[] = route('film', $film->film_id);
			}
			$planet['films'] = $filmsArray;
		}
		return response()->json($planets);
	}
}
