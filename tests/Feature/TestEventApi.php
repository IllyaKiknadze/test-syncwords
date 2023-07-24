<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;

class TestEventApi extends TestBase
{
    public function __construct(string $name)
    {
        parent::__construct($name);

        $this->auth();
    }

//    public function test_get_list(): void
//    {
//        $response = $this->get('/api/list', [
//            'Authorization' => 'Bearer '.$this->token
//        ]);
//        $response->assertStatus(200);
//        $response->assertJsonStructure(
//            [
//                '*' => [
//                    'id',
//                    'title',
//                    'start_date',
//                    'end_date',
//                    'organization_id',
//                    'created_at',
//                    'updated_at'
//                ]
//            ]
//        );
//    }
//
//    public function test_get_single_event()
//    {
//        $response = $this->get('/api/1', [
//            'Authorization' => 'Bearer '.$this->token
//        ]);
//        $response->assertStatus(200);
//        $response->assertJsonStructure(
//            [
//                'id',
//                'title',
//                'start_date',
//                'end_date',
//                'organization_id',
//                'created_at',
//                'updated_at'
//            ]
//        );
//    }

    public function test_update_event()
    {
        $response = $this->patch('/api/2', [
            'title'      => 'test 1',
            'start_date' => '2023-12-12 12:12:12',
            'end_date' => '2023-12-12 12:12:12'
        ], [
            'Authorization' => 'Bearer '.$this->token
        ]);

        $response->assertStatus(200);
    }
//    public function test_delete_event()
//    {
//        $response = $this->withHeaders([
//            'Authorization' => 'Bearer '.$this->token,
//            'Accept'        => 'application/json',
//            'Content-Type'  => 'application/json'
//        ])->delete('/api/1');
//
//        $response->assertStatus(200);
//    }
}
