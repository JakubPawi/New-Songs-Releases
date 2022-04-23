<?php

namespace App\Http\Controllers;

use App\Models\Token;
use SpotifyWebAPI\Session;
use Illuminate\Support\Facades\DB;

class SpotifyController extends Controller
{
    public function polaczenie() {
        $session = new Session(
           '525ec07e9b5e461d85b9855ebc69a3b6',
            'e80274b8d1cf41f48858d42893a54dae'
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
