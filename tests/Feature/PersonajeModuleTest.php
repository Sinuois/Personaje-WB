<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class PersonajeModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    public function see_character_loged() //Al estar logeado, se puede ver la página de personaje
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
                         ->withSession(['foo' => 'bar'])
                         ->get('/personaje');
                         $response->assertStatus(200);
    }
    /** @test */
    public function see_character_not_loged() //Al no estar logeado, no se puede ver la página de personaje y se redireccionará
    {
        $response = $this->get('/personaje');
        $response->assertStatus(302);
    }    
}
