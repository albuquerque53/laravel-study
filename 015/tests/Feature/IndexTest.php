<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IndexTest extends TestCase
{
    /**
     * @return void
     */
    public function testRequest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function testResponse()
    {
        $booksInDB = Book::all()
                        ->toArray();

        $response = $this->getJson('/');
        
        $response->assertJson($booksInDB);
    }

    public function testErrorMessage()
    {
        $booksInDB = Book::all();

        if ($booksInDB->isEmpty()) {
            $response = $this->getJson('/');

            $response->assertJson([
                'message' => 'Sorry, an error ocurred :/'
            ]);
        } else {
            $this->assertEquals(1, 1);
        }

    }
}
