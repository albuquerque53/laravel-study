<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowTest extends TestCase
{
    /** @return void */
    public function testRequest()
    {
        $response = $this->get('/1');

        $response->assertStatus(200);
    }

 
    /** @return void */
    public function testErrorMessage()
    {
        $booksInDB = Book::find(1);

        if (!$booksInDB) {
            $this->assertErrorMessage();
        } else {
            $this->assertEquals(1, 1);
        }
    }

    /** @return void */
    private function assertErrorMessage()
    {
        $response = $this->getJson('/1');

        $response->assertJson([
            'message' => 'Book not found :/'
        ]);
    }
}
