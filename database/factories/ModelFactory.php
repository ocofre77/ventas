<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Property::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});




$factory->define(App\Customer::class, function (Faker\Generator $faker) {

    $users = \App\User::all();
    $customerTypes = \App\CustomerType::all();

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'cell_phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'city' => $faker->city,
        'user_id' => $users->random()->id,
        'customer_type_id' => $customerTypes->random()->id,
    ];
});



$factory->define(App\Property::class, function (Faker\Generator $faker) {

    $users = \App\User::all();
    $customerTypes = \App\CustomerType::all();
    $cities = \App\City::all();
    $projects = \App\Project::all();

    $propertyTypes = \App\PropertyType::all();

    $propertyType = $propertyTypes->random();

    $area = $faker->numberBetween($min=50,$max=100);
    $area_useful = $faker->numberBetween($min=$area,$max=($area+100));
    $bedrooms = $faker->numberBetween($min=2,$max=10);
    $bathrooms = $bedrooms / 2;

    return [
        'name' => substr($propertyType->name,0,3).$faker->sentence(),
        'address' => $faker->address,
        'area'  => $area,
        'useful_area' => $area_useful,
        'bedrooms' => $bedrooms,
        'bathrooms' => $bathrooms,
        'value' => ($area_useful * 1000),
        'notes' => $faker->paragraph,
        'city_id' => $cities->random()->id,
        'property_status_id' => 2,
        'project_id' => $projects->random()->id,
        'property_type_id' => $propertyType->id,

    ];
});





$factory->define(App\Tracking::class, function (Faker\Generator $faker) {

    $users = \App\User::all();
    $propertyTypes = \App\PropertyType::all();
    $customers = \App\Customer::all();
    $businessStatus = \App\BusinessStatus::all();


    return [
        'bedrooms_min' => null,
        'bedrooms_max' => null,
        'bathrooms_min' => null,
        'bathrooms_max' => null,
        'area_min' => null,
        'area_max' => null,
        'value_min' => null,
        'value_max' => null,
        'contact_id' => $customers->random()->id,
        'business_status_id' => $businessStatus->random()->id,
        'property_type_id' => $propertyTypes->random()->id,
        'user_id' => $users->random()->id,
    ];
});


