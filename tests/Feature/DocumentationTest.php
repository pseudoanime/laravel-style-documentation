<?php

namespace Tests\Feature;

use Tests\TestCase;

class DocumentationTest extends TestCase
{
    /**  @test **/
    public function it_assumes_the_latest_documentation_version()
    {
        $respomse = $this->get('/docs/test')
            ->assertRedirect('/docs/' . DEFAULT_VERSION . '/test');
    }
}
