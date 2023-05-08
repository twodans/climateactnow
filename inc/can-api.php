<?php

$GLOBALS['totalSignUps'] = 0;

function getTotalSignUps()
{
    $totalSignUps = 0;

    try {
        $response = wp_remote_get('https://api.climateactnow.com.au/api/statistic-total');

        if (isset($response)) {
            $totalSignUps = $response;
        }

        if (is_array($response) && !is_wp_error($response)) {
            $json = json_decode( $response['body'] );
            $totalSignUps = $json->data->totalSignUps;
        }

    } catch (\Exception $e) {

    }

    return $totalSignUps;
}

$GLOBALS['totalSignUps'] = getTotalSignUps();