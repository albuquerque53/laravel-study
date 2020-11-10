<?php

namespace Tests\Feature;

use App\Models\Book;
use Tests\TestCase;

class IndexTest extends TestCase
{
    /** @return void */
    public function testRequest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @return void */
    public function testResponse()
    {
        $booksInDB = Book::all()
                        ->toArray();

        $response = $this->getJson('/');
        
        $response->assertJson($booksInDB);
    }

    /** @return void */
    public function testErrorMessage()
    {
        $booksInDB = Book::all();

        if ($booksInDB->isEmpty()) {
            $this->assertErrorMessage();
        } else {
            $this->assertEquals(1, 1);
        }
    }

    /** @return void */
    private function assertErrorMessage()
    {
        $response = $this->getJson('/');

        $response->assertJson([
            'message' => 'Sorry, an error ocurred :/'
        ]);
    }
}
