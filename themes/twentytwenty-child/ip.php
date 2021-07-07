<!DOCTYPE html>

<html class="no-js" lang="en-US" prefix="og: https://ogp.me/ns#">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ip</title>

</head>

<body class="ip">


    <main id="site-content" role="main">

        <div class="section-inner">

            <div class="IP">
                <p>Idioma por ip:</p>
                <?php
                ///////////// ESTO HAY QUE GUARDARLO EN UNA COOKIE Y PISARLO SI EL USUARIO CAMBIA DE PAÍS
                if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
                } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                } else {
                    $ip = $_SERVER['REMOTE_ADDR'];
                }

                var_dump($ip);

                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, "http://ip-api.com/json/$ip");
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                $output = curl_exec($curl);
                $json = json_decode($output);
                curl_close($curl);

                $detected_language = "English";
                $detected_country = $json->country;
                $detected_link = "";

                var_dump($detected_country);

                //$siteDomain = "amiad.php71.projectsunderdev.com";
                $siteDomain = "php74.projectsunderdev.com/seba/";

                // $id_menu = 24568;

                switch ($json->country) {
                    case 'Canada':
                    case 'United States':
                        $detected_country = "North America";
                        $detected_language = "English";
                        break;
                    case 'Brazil':
                    case 'Mexico':
                    case 'Colombia':
                    case 'Argentina':
                    case 'Peru':
                    case 'Venezuela':
                    case 'Chile':
                    case 'Guatemala':
                    case 'Ecuador':
                    case 'Bolivia':
                    case 'Haiti':
                    case 'Cuba':
                    case 'Dominican Republic':
                    case 'Honduras':
                    case 'Paraguay':
                    case 'Nicaragua':
                    case 'El Salvador':
                    case 'Costa Rica':
                    case 'Panama':
                    case 'Uruguay':
                    case 'Spain':
                        $detected_country = "España y LATAM";
                        $detected_language = "Español";
                        $detected_link = "es.";
                        break;
                    case 'China':
                        $detected_language = "Chinese";
                        $detected_link = "cn.";
                        break;
                    case 'Russia':
                        $detected_language = "Russian";
                        $detected_link = "ru.";
                        break;
                    case 'Germany':
                        $detected_language = "German";
                        $detected_link = "de.";
                        break;
                    case 'France':
                        $detected_language = "French";
                        $detected_link = "fr.";
                        break;
                    case 'Israel':
                        $detected_language = "Hebrew";
                        $detected_link = "il.";
                        break;
                } 
                
                var_dump($detected_language);
                var_dump($detected_link);

                ?>
                <p>:-------------------------------:</p>
            </div>

        </div><!-- .section-inner -->

    </main><!-- #site-content -->

</body>

</html>