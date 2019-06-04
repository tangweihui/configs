<?php
namespace Etocrm\Configs;
use Illuminate\Support\ServiceProvider;


class ConfigsServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/configs.php' => config_path('configs.php'), // 发布配置文件到 laravel 的config 下
        ]);

        Configs::boot();
        
    }
}
