<?php

namespace Markillat\StorageLinkRoute\tests\Feature;

use Illuminate\Filesystem\Filesystem;
use Markillat\StorageLinkRoute\tests\TestCase;

class StorageLinkRouteTest extends TestCase
{
    /**
     * @test
     */
    function can_create_the_storage_link_from_a_route()
    {
        $this->withoutExceptionHandling();

        $spy = $this->spy(Filesystem::class);

        $this->get('storage-link')->assertSee('The [public/storage] directoy has been linked');

        // El metodo spy le decimos que ya debio haber ejecutamo el metodo link de filesystem
        //y con el with le decimos que debe tener estos parametros para que pueda pasar el test
        $spy->shouldHaveReceived('link')->with(
            storage_path('app/public'), public_path('storage')
        );

        $spy->shouldHaveReceived('exists')->with(
            public_path('storage')
        );
    }

    /**
     * @test
     */
    function cannot_try_to_create_the_storage_link_twice()
    {
        $this->mock(Filesystem::class)->shouldReceive('exists')->andReturn(true);
        $this->get('storage-link')->assertSee('The public/storage directoy alredy exists');
    }
}