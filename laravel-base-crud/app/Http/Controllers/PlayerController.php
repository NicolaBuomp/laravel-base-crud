<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use Illuminate\Validation\Rule;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();

        return view('players.players', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('players.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate($this->validationRules());

        $player = new Player();
        
        $player->fill($data);

        $saved = $player->save();

        //Redirect to show page

        if($saved){

            $newPlayer = player::find($player->id);

            return redirect()->route('players.show' , $newPlayer);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        return view('players.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        return view('players.edit', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        $data = $request->all();

        $request->validate($this->validationRules($player->id));

        $updated = $player->update($data);

        if($updated){

            return redirect()->route('players.show' , $player->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        $ref = $player->name;

        $deleted = $player->delete();

        if($deleted) {
            return redirect()->route('players.index')->with('deleted', $ref);
        }
    }

    private function validationRules($id = null){
        return [
            'name' => [
                'required',
                'max:20',
                Rule::unique('players')->ignore($id),
            ],
            'team' => [
                'required',
                'max:50',
                Rule::unique('players')->ignore($id),
            ],
            'age' => [
                'required',
                Rule::unique('players')->ignore($id),
            ],
            'team' => [
                'required',
                'max:200',
                Rule::unique('players')->ignore($id),
            ]
        ];
    }
}
