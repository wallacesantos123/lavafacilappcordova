<!DOCTYPE html>
<!--
    Licensed to the Apache Software Foundation (ASF) under one
    or more contributor license agreements.  See the NOTICE file
    distributed with this work for additional information
    regarding copyright ownership.  The ASF licenses this file
    to you under the Apache License, Version 2.0 (the
    "License"); you may not use this file except in compliance
    with the License.  You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing,
    software distributed under the License is distributed on an
    "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
     KIND, either express or implied.  See the License for the
    specific language governing permissions and limitations
    under the License.
-->
<html>
    <head>
        <meta charset="utf-8">
        <!--
        Customize this policy to fit your own app's needs. For more guidance, please refer to the docs:
            https://cordova.apache.org/docs/en/latest/
        Some notes:
            * https://ssl.gstatic.com is required only on Android and is needed for TalkBack to function properly
            * Disables use of inline scripts in order to mitigate risk of XSS vulnerabilities. To change this:
                * Enable inline JS: add 'unsafe-inline' to default-src
        -->
        <!--<meta http-equiv="Content-Security-Policy" content="default-src 'self' data: https://ssl.gstatic.com 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *; img-src 'self' data: content:;">-->
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <!--<link rel="stylesheet" type="text/css" href="css/map.css" />-->
        <link rel="stylesheet" href="css/menu.css?v=0">
        <script src="js/map.js"></script>
        <script src="js/map_conf.js"></script>
        <title>LavaFacilApp - Menu</title>
    </head>

    <body>
        <div id="container">
             <div id="lavagens">
                <label>Lavagens</label>
             </div>

             <div id="lavarapidos">
                <label>Lava-Rap</label>
             </div>

             <div id="historico">
                <label>Historico</label>
             </div>

             <div id="configuracoes">
                <label>Config</label>
             </div>

             <div id="map">
                <script>
                    mapConf();
                    initMap();
                </script>
             </div>
        </div>  
    </body>
</html>