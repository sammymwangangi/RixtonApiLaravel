<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Client::create([
            'id' => '1',
            'url' => 'http://172.18.18.196:8080/DCT/api/Configurations/ApplicationInstanceName',
            'project_id' => '1',
            'input' => 'None',
            'verb' => 'GET',
        ]);
        App\Client::create([
            'id' => '2',
            'url' => 'http://172.18.18.196:8080/DCT/api/Configurations/CreateApplicationSetting',
            'project_id' => '1',
            'input' => '{
                        "setting_name": "general",
                        "setting_value": "2"
                        }',
            'verb' => 'POST',
        ]);
        App\Client::create([
            'id' => '3',
            'url' => 'http://172.18.18.196:8080/DCT/api/Configurations/CreateBillerTypes',
            'project_id' => '1',
            'input' => '{
                        "biller_name": "SASA",
                        "is_active": true
                        }',
            'verb' => 'POST',
        ]);
        App\Client::create([
            'id' => '4',
            'url' => 'http://172.18.18.196:8080/DCT/api/Configurations/CreateBillingMode',
            'project_id' => '1',
            'input' => '{
                        "billingModeName": "WEMBE",
                        "billing_mode_name": "WEMBE",
                        "isActive": true,
                        "is_active": true
                        }',
            'verb' => 'POST',
        ]);
        App\Client::create([
            'id' => '5',                        
            'url' => 'http://172.18.18.196:8080/DCT/api/Configurations/CreateBlacklistReason',
            'project_id' => '1',
            'input' => '{
                        "allow_transactions": true,
                        "reason": "KAZI MOB",
                        "reason_text": "KAZI MOB"
                        }',
            'verb' => 'POST',
        ]);
    }
}
