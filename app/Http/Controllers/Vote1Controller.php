<?php

namespace App\Http\Controllers;

use App\Vote1;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Http\Requests;
use Illuminate\Support\Facades\View;
use Input;

class Vote1Controller extends Controller
{
	/**
     * Responds to requests to GET /votes
     */
	// Haalt data voor het overzicht op
    public function index()
    {

    	$votesAll = Vote1::all()->count();

			$votes1 = Vote1::where('song1', 1)
    						->count();

			$votes2 = Vote1::where('song2', 1)
    						->count();

			$votes3 = Vote1::where('song3', 1)
    						->count();

			$votesData = array(
				$allVotes		= $votesAll,
				$votesSong1 = $votes1,
				$votesSong2 = $votes2,
				$votesSong3 = $votes3
			);

			return View::make('votes')->with('votesData', $votesData);
    }

    // Zorgt ervoor dat de juiste data naar de database wordt verstuurd
    public function store()
		{
			$inputs = Input::all();

			if ($inputs['id'] == 1) {
				$vote = new Vote1;
				$vote->song1 = 1;
				$vote->save();
			} else if ($inputs['id'] == 2) {
				$vote = new Vote1;
				$vote->song2 = 1;
				$vote->save();
			} else if ($inputs['id'] == 3) {
				$vote = new Vote1;
				$vote->song3 = 1;
				$vote->save();
			}
			return redirect('voted');
		}
}
