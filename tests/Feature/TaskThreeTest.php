<?php

namespace Tests\Feature;

use App\Models\Author;
use Tests\TestCase;

class TaskThreeTest extends TestCase
{
    public function testCanDeleteAuthor(): void
    {
        $author = Author::factory()->create();
        $response = $this->delete(route('authors.destroy', $author));
        $response->assertStatus(200);

        $this->assertSoftDeleted('authors', ['id' => $author->id]);
    }
}
