<?php

namespace Tripteki\RequestResponseQuery\Providers;

use Illuminate\Support\ServiceProvider;

class RequestResponseQueryServiceProvider extends ServiceProvider
{
    /**
     * @var bool
     */
    public static $loadConfig = true;

    /**
     * @return bool
     */
    public static function shouldLoadConfig()
    {
        return static::$loadConfig;
    }

    /**
     * @return void
     */
    public static function ignoreConfig()
    {
        static::$loadConfig = false;
    }

    /**
     * @return void
     */
    public function boot()
    {
        $this->registerConfigs();
        $this->registerPublishers();
    }

    /**
     * @return void
     */
    protected function registerConfigs()
    {
        if (static::shouldLoadConfig()) {

            $this->app["config"]->set("query-builder", []);
            $this->mergeConfigFrom(__DIR__."/../../config/query.php", "query-builder");
        }
    }

    /**
     * @return void
     */
    protected function registerPublishers()
    {
        $this->publishes(
        [
            __DIR__."/../../config/query.php" => config_path("query-builder.php"),
        ],

        "tripteki-laravelphp-request-response-query");
    }
};
