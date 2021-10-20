<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->seed();
        $response = $this->get('api/task');
        $response->dump();
        $response
        ->assertStatus(200)
        ->assertJson([
            'data' => [
                'data' => [
                    [
                        'id' => 1,
                        'title' => 'Docker junto a Cpanel',
                        'body' => 'https://nocinit.com/blog/how-to-install-docker-on-cpanel-servers-tutorial/',
                    ]
                ],
                'links' => [],
                'pagination' => []
            ],
            'error' => null,
            'message' => null,
            'code' => 200
        ])
        #->assertJson(
        #    function (AssertableJson $json) {
        #        return $json->where('id', 1);
        #    }
        #)
        ;
    }
}
