<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use SpotifyWebAPI\Session;
use App\Models\Token;

class TokenTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function is_token_added_to_database(){
        //Arrange
        $session = new Session(
            '525ec07e9b5e461d85b9855ebc69a3b6',
             'e80274b8d1cf41f48858d42893a54dae'
         );
         $session->requestCredentialsToken();
         $accessToken = $session->getAccessToken();
 
         $token = new Token();
         $token->fill(['token'=>$accessToken]);
         $token->save();

         $respone = $this->assertDatabaseHas('token',['token'=>$accessToken]);
    }
}
