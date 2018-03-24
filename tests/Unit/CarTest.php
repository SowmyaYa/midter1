<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class CarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertCar()
    {
        $car = new Car();
        $car->Make = 'Honda';
        $car->Model = 'city';
        $car->Year = '1998';
        $this->assertTrue($car->save());
    }
}
