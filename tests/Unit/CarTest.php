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
    public function testCount(){
        $cars=Car::All();
        $carCount = $cars->count();
        $actual=50;
        $this->assertEquals($carCount,$actual);
    }
    public function testInsertCar()
    {
        $car = new Car();
        $car->Make = 'Honda';
        $car->Model = 'city';
        $car->Year = '1998';
        $this->assertTrue($car->save());
    }
    /*public function testUpdateCar()
    {
        $car = new Car();
        $car->Make = 'Honda';
        $car->Model = 'crv';
        $car->Year = '1998';
        $car->save();
        $this->assertTrue($car->update());
    }*/
    public function testDeleteCar()
    {
        $car = new Car();
        $car->Make = 'Honda';
        $car->Model = 'city';
        $car->Year = '1998';
        $car->save();
        $this->assertTrue($car->delete());
    }


}
