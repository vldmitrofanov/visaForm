<?php

use Illuminate\Database\Seeder;
use App\MaritalStatus;

class MaritalStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cntr7 = new MaritalStatus();
        $cntr7->name = "COHABITED";
        $cntr7->code = "H";
        $cntr7->save();

        $cntr8 = new MaritalStatus();
        $cntr8->name = "CUSTOMARY";
        $cntr8->code = "C";
        $cntr8->save();

        $cntr9 = new MaritalStatus();
        $cntr9->name = "DIVORCED";
        $cntr9->code = "D";
        $cntr9->save();

        $cntr10 = new MaritalStatus();
        $cntr10->name = "MARRIED";
        $cntr10->code = "M";
        $cntr10->save();

        $cntr11 = new MaritalStatus();
        $cntr11->name = "SEPARATED";
        $cntr11->code = "P";
        $cntr11->save();

        $cntr12 = new MaritalStatus();
        $cntr12->name = "SINGLE";
        $cntr12->code = "S";
        $cntr12->save();

        $cntr13 = new MaritalStatus();
        $cntr13->name = "WIDOWED";
        $cntr13->code = "W";
        $cntr13->save();

    }
}
