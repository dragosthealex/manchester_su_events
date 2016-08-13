<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Event;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Geocode the address
        Event::created(function ($event) {
            $address = ($event->location_address ? $event->location_address : $event->location_name) . ' Manchester, UK';
            $url = "http://api.opencagedata.com/geocode/v1/json?query=" . urlencode($address) . "&pretty=1&key=2a6f835f29ecc858794db4643cd52fe8";
            //  Initiate curl
            $ch = curl_init();
            // Disable SSL verification
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            // Will return the response, if false it print the response
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // Set the url
            curl_setopt($ch, CURLOPT_URL,$url);
            // Execute
            $result=curl_exec($ch);
            // Closing
            curl_close($ch);
            // Decode json
            $result = json_decode($result, true);
            // If result okay, put stuff in lat & lng

            if(count($result["results"])) {
                $event->lat = $result["results"][0]["geometry"]["lat"];
                $event->lng = $result["results"][0]["geometry"]["lng"];
                $event->save();
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
