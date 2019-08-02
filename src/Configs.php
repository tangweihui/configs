<?php
namespace Etocrm\Configs;

use Etocrm\Configs\Model\ConfigManages;
use Illuminate\Support\Facades\{Schema, Log};

class Configs
{
    /**
     * Load configure into laravel from database.
     *
     * @return void
     */
    public static function load()
    {
        if($organizationId = config('configs.orgId', null)){
            \Tool::changeDatabase($organizationId);
        }

        if(Schema::hasTable('config_manages')){
            foreach (ConfigManages::all(['key', 'value']) as $config) {
                config([$config['key'] => $config['value']]);
            }
        }else{
            // Log::error('table not exists');
        }

    }
    /**
     * Bootstrap this package.
     *
     * @return void
     */
    public static function boot()
    {

    }
}