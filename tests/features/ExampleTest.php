<?php

class ExampleTest extends FeatureTestCase
{

    function test_basic_example()
    {
        $user = factory(\App\User::class)->create([
            'name'  => 'Heriberto Martinez',
            'email' => 'heri@mail.com'
        ]);

        $this->actingAs($user, 'api')
            ->visit('api/user')
            ->see('Heriberto Martinez')
            ->see('heri@mail.com');
    }
}
