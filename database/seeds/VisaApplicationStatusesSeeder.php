<?php

use Illuminate\Database\Seeder;
use VisaApplicationStatuses;

class VisaApplicationStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1 pre-moderation //2 post-moderation //3declined by immi // 4 rejected by us //5 completed 
        $cntr0 = new VisaApplicationStatuses();
        $cntr0->id = 1;
        $cntr0->code = "pre-moderation";
        $cntr0->save();
        
        $cntr2 = new VisaApplicationStatuses();
        $cntr2->id = 2;
        $cntr2->code = "in-progress";
        $cntr2->save();
        
        $cntr3 = new VisaApplicationStatuses();
        $cntr3->id = 3;
        $cntr3->code = "declined by ICA";
        $cntr3->save();
        
        $cntr4 = new VisaApplicationStatuses();
        $cntr4->id = 4;
        $cntr4->code = "rejected by Moder";
        $cntr4->save();
        
        $cntr5 = new VisaApplicationStatuses();
        $cntr5->id = 5;
        $cntr5->code = "success";
        $cntr5->save();
        
        $cntr6 = new VisaApplicationStatuses();
        $cntr6->id = 6;
        $cntr6->code = "reapplied";
        $cntr6->save();
        
        $cntr7 = new VisaApplicationStatuses();
        $cntr7->id = 7;
        $cntr7->code = "avaiting";
        $cntr7->save();
    }
}
