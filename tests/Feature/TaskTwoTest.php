<?php

namespace Tests\Feature;

use App\Models\Book;
use Tests\TestCase;

class TaskTwoTest extends TestCase
{
    public function testBookCanBeDeleted(): void
    {
        $book = Book::factory()->create();
        $response = $this->delete(route('books.destroy', $book));
        $response->assertStatus(200);
        $this->assertDatabaseCount('books', 0);

        /*
         * Ewentualnie, jeżeli ma pozostać funkcja miękkiego usuwania, należy zmienić test.
         * $this->assertSoftDeleted('books', ['id' => $book->id]);
         */
    }
}
