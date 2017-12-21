<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function __construct(){
        header("Access-Control-Allow-Origin: '*'");
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
    }

    public function store(Request $request) {
        return $request->get('textfield1');
    }

    public function index() {
        return Client::all();
    }

    public function byId($client) {
        $client = Client::find($client);
        
        if(!$client) {
            abort(404);
        }

        return response()->json($client);
    }

    public function create(Request $request) {
        $client = new Client;
        $client->name = $request->input('name');
        $client->address = $request->input('address');
        $client->telefone = $request->input('telefone');
        
        $client->save();

        return 1;
    }

    public function destroy($id) {
        $client = Client::find($id);
        $client->delete();
    }
}