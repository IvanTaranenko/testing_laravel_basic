<?php

namespace Tests\Feature;

use App\Box;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BoxTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_box_contents()
    {
        $box = new Box(['toy']);
        $this->assertTrue($box->has('toy'));
        $this->assertFalse($box->has('ball'));
    }

    public function test_take_one_from_box(){
        $box = new Box(['torch']);
        $this->assertEquals('torch', $box->takeOne());
        // Null, now the box is empty
        $this->assertNull($box->takeOne());

    }

    public function test_starts_with_a_letter()
    {
        $box = new Box(['toy', 'torch', 'ball', 'cat', 'tissue']);

        $results = $box->startsWith('t');

        $this->assertCount(3,$results);
        $this->assertContains('toy', $results);
        $this->assertContains('torch', $results);
        $this->assertContains('tissue', $results);

        // Empty array if passed even
        $this->assertEmpty($box->startsWith('s'));


    }

}
