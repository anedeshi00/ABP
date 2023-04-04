<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Game;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $games = Game::all();
        return view('index', ['games'=>$games]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function search(Request $request) {
        if($request->ajax()) {
            $output="";
            $games=DB::table('games')->where('name','LIKE','%'.$request->search."%")->get();
            if($games) {
                foreach($games as $key => $game) {
                    $output.='<div class="col-xl-3 col-lg-4 col-md-6">'.
                    '<div class="gallery-item h-100">'.
                    '<img src="assets/img/gallery/game_'.$game->id.'.png" class="img-fluid" alt="">'.
                    '<div class="gallery-links d-flex align-items-center justify-content-center">'.
                        '<a href="assets/img/gallery/game_'.$game->id.'.png" title="'.$game->name.'" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>'.
                        '<a href="/'.$game->nickname.'" class="details-link"><i class="bi bi-link-45deg"></i></a>'.
                    '</div>'.
                    '</div>'.
                '</div>';
                }

                return Response($output);
            }
        }
    }
}