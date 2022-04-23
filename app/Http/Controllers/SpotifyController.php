<?php

namespace App\Http\Controllers;

use App\Models\Token;
use SpotifyWebAPI\Session;
use Illuminate\Support\Facades\DB;

class SpotifyController extends Controller
{
    public function polaczenie() {
        $session = new Session(
           $_ENV['CLIENT_ID'],
            $_ENV['CLIENT_ID_SECRET']
        );
        $session->requestCredentialsToken();
        $accessToken = $session->getAccessToken();

        $token = new Token();
        $token->fill(['token'=>$accessToken]);
        $token->save();
        return view('releases');        
    }


    public function token(){
        $token = DB::select('SELECT token FROM `tokens` order by id desc limit 1');
        return response()->json([
            'token'=>$token,
        ]);

    }

}
