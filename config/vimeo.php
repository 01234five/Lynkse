<?php

/**
 *   Copyright 2018 Vimeo.
 *
 *   Licensed under the Apache License, Version 2.0 (the "License");
 *   you may not use this file except in compliance with the License.
 *   You may obtain a copy of the License at
 *
 *       http://www.apache.org/licenses/LICENSE-2.0
 *
 *   Unless required by applicable law or agreed to in writing, software
 *   distributed under the License is distributed on an "AS IS" BASIS,
 *   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *   See the License for the specific language governing permissions and
 *   limitations under the License.
 */
declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | Vimeo Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [

        'main' => [
            'client_id' => env('VIMEO_CLIENT', 'eeaaf0bfb95970b86661b4fda0923975bcb26957'),
            'client_secret' => env('VIMEO_SECRET', '6/Y03PW5gVsja1Guc5ysW6FXJJ/Z8s5O+x1WuaTT8mNRNeFiSShkxSdDTUlX0bSs3ChvVni+xrotD+x51xItFHSKMVNIcwewox4wjqqwNhGv+DDv29ZnT3x6wvIkeh+O'),
            'access_token' => env('VIMEO_ACCESS', '2bae2c32d9b6bc2b752c52e50b806317'),
        ],

        'alternative' => [
            'client_id' => env('VIMEO_ALT_CLIENT', 'your-alt-client-id'),
            'client_secret' => env('VIMEO_ALT_SECRET', 'your-alt-client-secret'),
            'access_token' => env('VIMEO_ALT_ACCESS', null),
        ],

    ],

];
