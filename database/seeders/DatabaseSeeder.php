<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Branch;
use App\Models\Status;
use App\Models\Address;
use App\Models\Package;
use App\Models\Payment;
use App\Models\Vehicle;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Receiver;
use App\Models\Shipment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Branch::factory(10)->create();
        Employee::factory(10)->create();
        Address::factory(10)->create();
        Receiver::factory(10)->create();
        Customer::factory(10)->create();
        Vehicle::factory(10)->create();
        Package::factory(5)->create();
        Payment::factory(10)->create();
        Status::factory(10)->create();
        Shipment::factory(10)->create();
    }
}
