
<?php

function check_plain($text) {
  return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>drush site-install generator</title>
    <meta name="description" content="Here you can easily generate your drush site-install command.">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

  </head>
  <body>
    <div id="container">
      <h1>Install drupal via drush!</h1>
      <form method="post" action="generate.php">
        <div id="site">
        <fieldset>
          <legend>Site</legend>
          <div class="form-item">
            <label for="site-name">Site name:</label>
            <input type="text" id="site-name" name="site[name]" placeholder="Enter site name" value="<?php print isset($_GET['site']['name']) ? check_plain($_GET['site']['name']) : ''; ?>" autofocus />
          </div>
          <div class="form-item">
            <label for="installation-profile">Installation profile:</label>
            <select id="installation-profile" name="profile">
              <option value="standard">Standard</option>
              <option value="minimal">Minimal</option>
              <option value="_other">Other</option>
            </select>
          </div>
          <div class="form-item">
            <input type="text" id="installation-profile-other" placeholder="Enter profile name"/>
          </div>
          <div class="form-item">
            <label for="site-timezone">Timezone:</label>
            <select id="site-timezone" name="site[timezone]">
              <option value="Africa/Abidjan">Africa/Abidjan</option>
              <option value="Africa/Accra">Africa/Accra</option>
              <option value="Africa/Addis_Ababa">Africa/Addis_Ababa</option>
              <option value="Africa/Algiers">Africa/Algiers</option>
              <option value="Africa/Asmara">Africa/Asmara</option>
              <option value="Africa/Bamako">Africa/Bamako</option>
              <option value="Africa/Bangui">Africa/Bangui</option>
              <option value="Africa/Banjul">Africa/Banjul</option>
              <option value="Africa/Bissau">Africa/Bissau</option>
              <option value="Africa/Blantyre">Africa/Blantyre</option>
              <option value="Africa/Brazzaville">Africa/Brazzaville</option>
              <option value="Africa/Bujumbura">Africa/Bujumbura</option>
              <option value="Africa/Cairo">Africa/Cairo</option>
              <option value="Africa/Casablanca">Africa/Casablanca</option>
              <option value="Africa/Ceuta">Africa/Ceuta</option>
              <option value="Africa/Conakry">Africa/Conakry</option>
              <option value="Africa/Dakar">Africa/Dakar</option>
              <option value="Africa/Dar_es_Salaam">Africa/Dar_es_Salaam</option>
              <option value="Africa/Djibouti">Africa/Djibouti</option>
              <option value="Africa/Douala">Africa/Douala</option>
              <option value="Africa/El_Aaiun">Africa/El_Aaiun</option>
              <option value="Africa/Freetown">Africa/Freetown</option>
              <option value="Africa/Gaborone">Africa/Gaborone</option>
              <option value="Africa/Harare">Africa/Harare</option>
              <option value="Africa/Johannesburg">Africa/Johannesburg</option>
              <option value="Africa/Kampala">Africa/Kampala</option>
              <option value="Africa/Khartoum">Africa/Khartoum</option>
              <option value="Africa/Kigali">Africa/Kigali</option>
              <option value="Africa/Kinshasa">Africa/Kinshasa</option>
              <option value="Africa/Lagos">Africa/Lagos</option>
              <option value="Africa/Libreville">Africa/Libreville</option>
              <option value="Africa/Lome">Africa/Lome</option>
              <option value="Africa/Luanda">Africa/Luanda</option>
              <option value="Africa/Lubumbashi">Africa/Lubumbashi</option>
              <option value="Africa/Lusaka">Africa/Lusaka</option>
              <option value="Africa/Malabo">Africa/Malabo</option>
              <option value="Africa/Maputo">Africa/Maputo</option>
              <option value="Africa/Maseru">Africa/Maseru</option>
              <option value="Africa/Mbabane">Africa/Mbabane</option>
              <option value="Africa/Mogadishu">Africa/Mogadishu</option>
              <option value="Africa/Monrovia">Africa/Monrovia</option>
              <option value="Africa/Nairobi">Africa/Nairobi</option>
              <option value="Africa/Ndjamena">Africa/Ndjamena</option>
              <option value="Africa/Niamey">Africa/Niamey</option>
              <option value="Africa/Nouakchott">Africa/Nouakchott</option>
              <option value="Africa/Ouagadougou">Africa/Ouagadougou</option>
              <option value="Africa/Porto-Novo">Africa/Porto-Novo</option>
              <option value="Africa/Sao_Tome">Africa/Sao_Tome</option>
              <option value="Africa/Tripoli">Africa/Tripoli</option>
              <option value="Africa/Tunis">Africa/Tunis</option>
              <option value="Africa/Windhoek">Africa/Windhoek</option>
              <option value="America/Adak">America/Adak</option>
              <option value="America/Anchorage">America/Anchorage</option>
              <option value="America/Anguilla">America/Anguilla</option>
              <option value="America/Antigua">America/Antigua</option>
              <option value="America/Araguaina">America/Araguaina</option>
              <option value="America/Argentina/Buenos_Aires">America/Argentina/Buenos_Aires</option>
              <option value="America/Argentina/Catamarca">America/Argentina/Catamarca</option>
              <option value="America/Argentina/Cordoba">America/Argentina/Cordoba</option>
              <option value="America/Argentina/Jujuy">America/Argentina/Jujuy</option>
              <option value="America/Argentina/La_Rioja">America/Argentina/La_Rioja</option>
              <option value="America/Argentina/Mendoza">America/Argentina/Mendoza</option>
              <option value="America/Argentina/Rio_Gallegos">America/Argentina/Rio_Gallegos</option>
              <option value="America/Argentina/Salta">America/Argentina/Salta</option>
              <option value="America/Argentina/San_Juan">America/Argentina/San_Juan</option>
              <option value="America/Argentina/San_Luis">America/Argentina/San_Luis</option>
              <option value="America/Argentina/Tucuman">America/Argentina/Tucuman</option>
              <option value="America/Argentina/Ushuaia">America/Argentina/Ushuaia</option>
              <option value="America/Aruba">America/Aruba</option>
              <option value="America/Asuncion">America/Asuncion</option>
              <option value="America/Atikokan">America/Atikokan</option>
              <option value="America/Bahia">America/Bahia</option>
              <option value="America/Barbados">America/Barbados</option>
              <option value="America/Belem">America/Belem</option>
              <option value="America/Belize">America/Belize</option>
              <option value="America/Blanc-Sablon">America/Blanc-Sablon</option>
              <option value="America/Boa_Vista">America/Boa_Vista</option>
              <option value="America/Bogota">America/Bogota</option>
              <option value="America/Boise">America/Boise</option>
              <option value="America/Cambridge_Bay">America/Cambridge_Bay</option>
              <option value="America/Campo_Grande">America/Campo_Grande</option>
              <option value="America/Cancun">America/Cancun</option>
              <option value="America/Caracas">America/Caracas</option>
              <option value="America/Cayenne">America/Cayenne</option>
              <option value="America/Cayman">America/Cayman</option>
              <option value="America/Chicago">America/Chicago</option>
              <option value="America/Chihuahua">America/Chihuahua</option>
              <option value="America/Costa_Rica">America/Costa_Rica</option>
              <option value="America/Cuiaba">America/Cuiaba</option>
              <option value="America/Curacao">America/Curacao</option>
              <option value="America/Danmarkshavn">America/Danmarkshavn</option>
              <option value="America/Dawson_Creek">America/Dawson_Creek</option>
              <option value="America/Dawson">America/Dawson</option>
              <option value="America/Denver">America/Denver</option>
              <option value="America/Detroit">America/Detroit</option>
              <option value="America/Dominica">America/Dominica</option>
              <option value="America/Edmonton">America/Edmonton</option>
              <option value="America/Eirunepe">America/Eirunepe</option>
              <option value="America/El_Salvador">America/El_Salvador</option>
              <option value="America/Fortaleza">America/Fortaleza</option>
              <option value="America/Glace_Bay">America/Glace_Bay</option>
              <option value="America/Godthab">America/Godthab</option>
              <option value="America/Goose_Bay">America/Goose_Bay</option>
              <option value="America/Grand_Turk">America/Grand_Turk</option>
              <option value="America/Grenada">America/Grenada</option>
              <option value="America/Guadeloupe">America/Guadeloupe</option>
              <option value="America/Guatemala">America/Guatemala</option>
              <option value="America/Guayaquil">America/Guayaquil</option>
              <option value="America/Guyana">America/Guyana</option>
              <option value="America/Halifax">America/Halifax</option>
              <option value="America/Havana">America/Havana</option>
              <option value="America/Hermosillo">America/Hermosillo</option>
              <option value="America/Indiana/Indianapolis">America/Indiana/Indianapolis</option>
              <option value="America/Indiana/Knox">America/Indiana/Knox</option>
              <option value="America/Indiana/Marengo">America/Indiana/Marengo</option>
              <option value="America/Indiana/Petersburg">America/Indiana/Petersburg</option>
              <option value="America/Indiana/Tell_City">America/Indiana/Tell_City</option>
              <option value="America/Indiana/Vevay">America/Indiana/Vevay</option>
              <option value="America/Indiana/Vincennes">America/Indiana/Vincennes</option>
              <option value="America/Indiana/Winamac">America/Indiana/Winamac</option>
              <option value="America/Inuvik">America/Inuvik</option>
              <option value="America/Iqaluit">America/Iqaluit</option>
              <option value="America/Jamaica">America/Jamaica</option>
              <option value="America/Juneau">America/Juneau</option>
              <option value="America/Kentucky/Louisville">America/Kentucky/Louisville</option>
              <option value="America/Kentucky/Monticello">America/Kentucky/Monticello</option>
              <option value="America/La_Paz">America/La_Paz</option>
              <option value="America/Lima">America/Lima</option>
              <option value="America/Los_Angeles">America/Los_Angeles</option>
              <option value="America/Maceio">America/Maceio</option>
              <option value="America/Managua">America/Managua</option>
              <option value="America/Manaus">America/Manaus</option>
              <option value="America/Marigot">America/Marigot</option>
              <option value="America/Martinique">America/Martinique</option>
              <option value="America/Mazatlan">America/Mazatlan</option>
              <option value="America/Menominee">America/Menominee</option>
              <option value="America/Merida">America/Merida</option>
              <option value="America/Mexico_City">America/Mexico_City</option>
              <option value="America/Miquelon">America/Miquelon</option>
              <option value="America/Moncton">America/Moncton</option>
              <option value="America/Monterrey">America/Monterrey</option>
              <option value="America/Montevideo">America/Montevideo</option>
              <option value="America/Montreal">America/Montreal</option>
              <option value="America/Montserrat">America/Montserrat</option>
              <option value="America/Nassau">America/Nassau</option>
              <option value="America/New_York">America/New_York</option>
              <option value="America/Nipigon">America/Nipigon</option>
              <option value="America/Nome">America/Nome</option>
              <option value="America/Noronha">America/Noronha</option>
              <option value="America/North_Dakota/Center">America/North_Dakota/Center</option>
              <option value="America/North_Dakota/New_Salem">America/North_Dakota/New_Salem</option>
              <option value="America/Panama">America/Panama</option>
              <option value="America/Pangnirtung">America/Pangnirtung</option>
              <option value="America/Paramaribo">America/Paramaribo</option>
              <option value="America/Phoenix">America/Phoenix</option>
              <option value="America/Port_of_Spain">America/Port_of_Spain</option>
              <option value="America/Port-au-Prince">America/Port-au-Prince</option>
              <option value="America/Porto_Velho">America/Porto_Velho</option>
              <option value="America/Puerto_Rico">America/Puerto_Rico</option>
              <option value="America/Rainy_River">America/Rainy_River</option>
              <option value="America/Rankin_Inlet">America/Rankin_Inlet</option>
              <option value="America/Recife">America/Recife</option>
              <option value="America/Regina">America/Regina</option>
              <option value="America/Resolute">America/Resolute</option>
              <option value="America/Rio_Branco">America/Rio_Branco</option>
              <option value="America/Santarem">America/Santarem</option>
              <option value="America/Santiago">America/Santiago</option>
              <option value="America/Santo_Domingo">America/Santo_Domingo</option>
              <option value="America/Sao_Paulo">America/Sao_Paulo</option>
              <option value="America/Scoresbysund">America/Scoresbysund</option>
              <option value="America/Shiprock">America/Shiprock</option>
              <option value="America/St_Barthelemy">America/St_Barthelemy</option>
              <option value="America/St_Johns">America/St_Johns</option>
              <option value="America/St_Kitts">America/St_Kitts</option>
              <option value="America/St_Lucia">America/St_Lucia</option>
              <option value="America/St_Thomas">America/St_Thomas</option>
              <option value="America/St_Vincent">America/St_Vincent</option>
              <option value="America/Swift_Current">America/Swift_Current</option>
              <option value="America/Tegucigalpa">America/Tegucigalpa</option>
              <option value="America/Thule">America/Thule</option>
              <option value="America/Thunder_Bay">America/Thunder_Bay</option>
              <option value="America/Tijuana">America/Tijuana</option>
              <option value="America/Toronto">America/Toronto</option>
              <option value="America/Tortola">America/Tortola</option>
              <option value="America/Vancouver">America/Vancouver</option>
              <option value="America/Whitehorse">America/Whitehorse</option>
              <option value="America/Winnipeg">America/Winnipeg</option>
              <option value="America/Yakutat">America/Yakutat</option>
              <option value="America/Yellowknife">America/Yellowknife</option>
              <option value="Antarctica/Casey">Antarctica/Casey</option>
              <option value="Antarctica/Davis">Antarctica/Davis</option>
              <option value="Antarctica/DumontDUrville">Antarctica/DumontDUrville</option>
              <option value="Antarctica/Mawson">Antarctica/Mawson</option>
              <option value="Antarctica/McMurdo">Antarctica/McMurdo</option>
              <option value="Antarctica/Palmer">Antarctica/Palmer</option>
              <option value="Antarctica/Rothera">Antarctica/Rothera</option>
              <option value="Antarctica/South_Pole">Antarctica/South_Pole</option>
              <option value="Antarctica/Syowa">Antarctica/Syowa</option>
              <option value="Antarctica/Vostok">Antarctica/Vostok</option>
              <option value="Arctic/Longyearbyen">Arctic/Longyearbyen</option>
              <option value="Asia/Aden">Asia/Aden</option>
              <option value="Asia/Almaty">Asia/Almaty</option>
              <option value="Asia/Amman">Asia/Amman</option>
              <option value="Asia/Anadyr">Asia/Anadyr</option>
              <option value="Asia/Aqtau">Asia/Aqtau</option>
              <option value="Asia/Aqtobe">Asia/Aqtobe</option>
              <option value="Asia/Ashgabat">Asia/Ashgabat</option>
              <option value="Asia/Baghdad">Asia/Baghdad</option>
              <option value="Asia/Bahrain">Asia/Bahrain</option>
              <option value="Asia/Baku">Asia/Baku</option>
              <option value="Asia/Bangkok">Asia/Bangkok</option>
              <option value="Asia/Beirut">Asia/Beirut</option>
              <option value="Asia/Bishkek">Asia/Bishkek</option>
              <option value="Asia/Brunei">Asia/Brunei</option>
              <option value="Asia/Choibalsan">Asia/Choibalsan</option>
              <option value="Asia/Chongqing">Asia/Chongqing</option>
              <option value="Asia/Colombo">Asia/Colombo</option>
              <option value="Asia/Damascus">Asia/Damascus</option>
              <option value="Asia/Dhaka">Asia/Dhaka</option>
              <option value="Asia/Dili">Asia/Dili</option>
              <option value="Asia/Dubai">Asia/Dubai</option>
              <option value="Asia/Dushanbe">Asia/Dushanbe</option>
              <option value="Asia/Gaza">Asia/Gaza</option>
              <option value="Asia/Harbin">Asia/Harbin</option>
              <option value="Asia/Ho_Chi_Minh">Asia/Ho_Chi_Minh</option>
              <option value="Asia/Hong_Kong">Asia/Hong_Kong</option>
              <option value="Asia/Hovd">Asia/Hovd</option>
              <option value="Asia/Irkutsk">Asia/Irkutsk</option>
              <option value="Asia/Jakarta">Asia/Jakarta</option>
              <option value="Asia/Jayapura">Asia/Jayapura</option>
              <option value="Asia/Jerusalem">Asia/Jerusalem</option>
              <option value="Asia/Kabul">Asia/Kabul</option>
              <option value="Asia/Kamchatka">Asia/Kamchatka</option>
              <option value="Asia/Karachi">Asia/Karachi</option>
              <option value="Asia/Kashgar">Asia/Kashgar</option>
              <option value="Asia/Kathmandu">Asia/Kathmandu</option>
              <option value="Asia/Kolkata">Asia/Kolkata</option>
              <option value="Asia/Krasnoyarsk">Asia/Krasnoyarsk</option>
              <option value="Asia/Kuala_Lumpur">Asia/Kuala_Lumpur</option>
              <option value="Asia/Kuching">Asia/Kuching</option>
              <option value="Asia/Kuwait">Asia/Kuwait</option>
              <option value="Asia/Macau">Asia/Macau</option>
              <option value="Asia/Magadan">Asia/Magadan</option>
              <option value="Asia/Makassar">Asia/Makassar</option>
              <option value="Asia/Manila">Asia/Manila</option>
              <option value="Asia/Muscat">Asia/Muscat</option>
              <option value="Asia/Nicosia">Asia/Nicosia</option>
              <option value="Asia/Novokuznetsk">Asia/Novokuznetsk</option>
              <option value="Asia/Novosibirsk">Asia/Novosibirsk</option>
              <option value="Asia/Omsk">Asia/Omsk</option>
              <option value="Asia/Oral">Asia/Oral</option>
              <option value="Asia/Phnom_Penh">Asia/Phnom_Penh</option>
              <option value="Asia/Pontianak">Asia/Pontianak</option>
              <option value="Asia/Pyongyang">Asia/Pyongyang</option>
              <option value="Asia/Qatar">Asia/Qatar</option>
              <option value="Asia/Qyzylorda">Asia/Qyzylorda</option>
              <option value="Asia/Rangoon">Asia/Rangoon</option>
              <option value="Asia/Riyadh">Asia/Riyadh</option>
              <option value="Asia/Sakhalin">Asia/Sakhalin</option>
              <option value="Asia/Samarkand">Asia/Samarkand</option>
              <option value="Asia/Seoul">Asia/Seoul</option>
              <option value="Asia/Shanghai">Asia/Shanghai</option>
              <option value="Asia/Singapore">Asia/Singapore</option>
              <option value="Asia/Taipei">Asia/Taipei</option>
              <option value="Asia/Tashkent">Asia/Tashkent</option>
              <option value="Asia/Tbilisi">Asia/Tbilisi</option>
              <option value="Asia/Tehran">Asia/Tehran</option>
              <option value="Asia/Thimphu">Asia/Thimphu</option>
              <option value="Asia/Tokyo">Asia/Tokyo</option>
              <option value="Asia/Ulaanbaatar">Asia/Ulaanbaatar</option>
              <option value="Asia/Urumqi">Asia/Urumqi</option>
              <option value="Asia/Vientiane">Asia/Vientiane</option>
              <option value="Asia/Vladivostok">Asia/Vladivostok</option>
              <option value="Asia/Yakutsk">Asia/Yakutsk</option>
              <option value="Asia/Yekaterinburg">Asia/Yekaterinburg</option>
              <option value="Asia/Yerevan">Asia/Yerevan</option>
              <option value="Atlantic/Azores">Atlantic/Azores</option>
              <option value="Atlantic/Bermuda">Atlantic/Bermuda</option>
              <option value="Atlantic/Canary">Atlantic/Canary</option>
              <option value="Atlantic/Cape_Verde">Atlantic/Cape_Verde</option>
              <option value="Atlantic/Faroe">Atlantic/Faroe</option>
              <option value="Atlantic/Madeira">Atlantic/Madeira</option>
              <option value="Atlantic/Reykjavik">Atlantic/Reykjavik</option>
              <option value="Atlantic/South_Georgia">Atlantic/South_Georgia</option>
              <option value="Atlantic/St_Helena">Atlantic/St_Helena</option>
              <option value="Atlantic/Stanley">Atlantic/Stanley</option>
              <option value="Australia/Adelaide">Australia/Adelaide</option>
              <option value="Australia/Brisbane">Australia/Brisbane</option>
              <option value="Australia/Broken_Hill">Australia/Broken_Hill</option>
              <option value="Australia/Currie">Australia/Currie</option>
              <option value="Australia/Darwin">Australia/Darwin</option>
              <option value="Australia/Eucla">Australia/Eucla</option>
              <option value="Australia/Hobart">Australia/Hobart</option>
              <option value="Australia/Lindeman">Australia/Lindeman</option>
              <option value="Australia/Lord_Howe">Australia/Lord_Howe</option>
              <option value="Australia/Melbourne">Australia/Melbourne</option>
              <option value="Australia/Perth">Australia/Perth</option>
              <option value="Australia/Sydney">Australia/Sydney</option>
              <option value="Europe/Amsterdam">Europe/Amsterdam</option>
              <option value="Europe/Andorra">Europe/Andorra</option>
              <option value="Europe/Athens">Europe/Athens</option>
              <option value="Europe/Belgrade">Europe/Belgrade</option>
              <option value="Europe/Berlin">Europe/Berlin</option>
              <option value="Europe/Bratislava">Europe/Bratislava</option>
              <option value="Europe/Brussels">Europe/Brussels</option>
              <option value="Europe/Bucharest">Europe/Bucharest</option>
              <option value="Europe/Budapest">Europe/Budapest</option>
              <option value="Europe/Chisinau">Europe/Chisinau</option>
              <option value="Europe/Copenhagen">Europe/Copenhagen</option>
              <option value="Europe/Dublin">Europe/Dublin</option>
              <option value="Europe/Gibraltar">Europe/Gibraltar</option>
              <option value="Europe/Guernsey">Europe/Guernsey</option>
              <option value="Europe/Helsinki">Europe/Helsinki</option>
              <option value="Europe/Isle_of_Man">Europe/Isle_of_Man</option>
              <option value="Europe/Istanbul">Europe/Istanbul</option>
              <option value="Europe/Jersey">Europe/Jersey</option>
              <option value="Europe/Kaliningrad">Europe/Kaliningrad</option>
              <option value="Europe/Kiev">Europe/Kiev</option>
              <option value="Europe/Lisbon">Europe/Lisbon</option>
              <option value="Europe/Ljubljana">Europe/Ljubljana</option>
              <option value="Europe/London">Europe/London</option>
              <option value="Europe/Luxembourg">Europe/Luxembourg</option>
              <option value="Europe/Madrid">Europe/Madrid</option>
              <option value="Europe/Malta">Europe/Malta</option>
              <option value="Europe/Mariehamn">Europe/Mariehamn</option>
              <option value="Europe/Minsk">Europe/Minsk</option>
              <option value="Europe/Monaco">Europe/Monaco</option>
              <option value="Europe/Moscow">Europe/Moscow</option>
              <option value="Europe/Oslo">Europe/Oslo</option>
              <option value="Europe/Paris">Europe/Paris</option>
              <option value="Europe/Podgorica">Europe/Podgorica</option>
              <option value="Europe/Prague">Europe/Prague</option>
              <option value="Europe/Riga">Europe/Riga</option>
              <option value="Europe/Rome">Europe/Rome</option>
              <option value="Europe/Samara">Europe/Samara</option>
              <option value="Europe/San_Marino">Europe/San_Marino</option>
              <option value="Europe/Sarajevo">Europe/Sarajevo</option>
              <option value="Europe/Simferopol">Europe/Simferopol</option>
              <option value="Europe/Skopje">Europe/Skopje</option>
              <option value="Europe/Sofia">Europe/Sofia</option>
              <option value="Europe/Stockholm">Europe/Stockholm</option>
              <option value="Europe/Tallinn">Europe/Tallinn</option>
              <option value="Europe/Tirane">Europe/Tirane</option>
              <option value="Europe/Uzhgorod">Europe/Uzhgorod</option>
              <option value="Europe/Vaduz">Europe/Vaduz</option>
              <option value="Europe/Vatican">Europe/Vatican</option>
              <option value="Europe/Vienna">Europe/Vienna</option>
              <option value="Europe/Vilnius">Europe/Vilnius</option>
              <option value="Europe/Volgograd">Europe/Volgograd</option>
              <option value="Europe/Warsaw">Europe/Warsaw</option>
              <option value="Europe/Zagreb">Europe/Zagreb</option>
              <option value="Europe/Zaporozhye">Europe/Zaporozhye</option>
              <option value="Europe/Zurich">Europe/Zurich</option>
              <option value="Indian/Antananarivo">Indian/Antananarivo</option>
              <option value="Indian/Chagos">Indian/Chagos</option>
              <option value="Indian/Christmas">Indian/Christmas</option>
              <option value="Indian/Cocos">Indian/Cocos</option>
              <option value="Indian/Comoro">Indian/Comoro</option>
              <option value="Indian/Kerguelen">Indian/Kerguelen</option>
              <option value="Indian/Mahe">Indian/Mahe</option>
              <option value="Indian/Maldives">Indian/Maldives</option>
              <option value="Indian/Mauritius">Indian/Mauritius</option>
              <option value="Indian/Mayotte">Indian/Mayotte</option>
              <option value="Indian/Reunion">Indian/Reunion</option>
              <option value="Pacific/Apia">Pacific/Apia</option>
              <option value="Pacific/Auckland">Pacific/Auckland</option>
              <option value="Pacific/Chatham">Pacific/Chatham</option>
              <option value="Pacific/Easter">Pacific/Easter</option>
              <option value="Pacific/Efate">Pacific/Efate</option>
              <option value="Pacific/Enderbury">Pacific/Enderbury</option>
              <option value="Pacific/Fakaofo">Pacific/Fakaofo</option>
              <option value="Pacific/Fiji">Pacific/Fiji</option>
              <option value="Pacific/Funafuti">Pacific/Funafuti</option>
              <option value="Pacific/Galapagos">Pacific/Galapagos</option>
              <option value="Pacific/Gambier">Pacific/Gambier</option>
              <option value="Pacific/Guadalcanal">Pacific/Guadalcanal</option>
              <option value="Pacific/Guam">Pacific/Guam</option>
              <option value="Pacific/Honolulu">Pacific/Honolulu</option>
              <option value="Pacific/Johnston">Pacific/Johnston</option>
              <option value="Pacific/Kiritimati">Pacific/Kiritimati</option>
              <option value="Pacific/Kosrae">Pacific/Kosrae</option>
              <option value="Pacific/Kwajalein">Pacific/Kwajalein</option>
              <option value="Pacific/Majuro">Pacific/Majuro</option>
              <option value="Pacific/Marquesas">Pacific/Marquesas</option>
              <option value="Pacific/Midway">Pacific/Midway</option>
              <option value="Pacific/Nauru">Pacific/Nauru</option>
              <option value="Pacific/Niue">Pacific/Niue</option>
              <option value="Pacific/Norfolk">Pacific/Norfolk</option>
              <option value="Pacific/Noumea">Pacific/Noumea</option>
              <option value="Pacific/Pago_Pago">Pacific/Pago_Pago</option>
              <option value="Pacific/Palau">Pacific/Palau</option>
              <option value="Pacific/Pitcairn">Pacific/Pitcairn</option>
              <option value="Pacific/Ponape">Pacific/Ponape</option>
              <option value="Pacific/Port_Moresby">Pacific/Port_Moresby</option>
              <option value="Pacific/Rarotonga">Pacific/Rarotonga</option>
              <option value="Pacific/Saipan">Pacific/Saipan</option>
              <option value="Pacific/Tahiti">Pacific/Tahiti</option>
              <option value="Pacific/Tarawa">Pacific/Tarawa</option>
              <option value="Pacific/Tongatapu">Pacific/Tongatapu</option>
              <option value="Pacific/Truk">Pacific/Truk</option>
              <option value="Pacific/Wake">Pacific/Wake</option>
              <option value="Pacific/Wallis">Pacific/Wallis</option>
              <option value="UTC">UTC</option>
            </select>
          </div>
          <div class="form-item">
            <label for="site-country">Country:</label>
            <select id="site-country" name="site[country]">
              <option value="">- None -</option>
              <option value="AF">Afghanistan</option>
              <option value="AX">Aland Islands</option>
              <option value="AL">Albania</option>
              <option value="DZ">Algeria</option>
              <option value="AS">American Samoa</option>
              <option value="AD">Andorra</option>
              <option value="AO">Angola</option>
              <option value="AI">Anguilla</option>
              <option value="AQ">Antarctica</option>
              <option value="AG">Antigua and Barbuda</option>
              <option value="AR">Argentina</option>
              <option value="AM">Armenia</option>
              <option value="AW">Aruba</option>
              <option value="AU">Australia</option>
              <option value="AT">Austria</option>
              <option value="AZ">Azerbaijan</option>
              <option value="BS">Bahamas</option>
              <option value="BH">Bahrain</option>
              <option value="BD">Bangladesh</option>
              <option value="BB">Barbados</option>
              <option value="BY">Belarus</option>
              <option value="BE">Belgium</option>
              <option value="BZ">Belize</option>
              <option value="BJ">Benin</option>
              <option value="BM">Bermuda</option>
              <option value="BT">Bhutan</option>
              <option value="BO">Bolivia</option>
              <option value="BA">Bosnia and Herzegovina</option>
              <option value="BW">Botswana</option>
              <option value="BV">Bouvet Island</option>
              <option value="BR">Brazil</option>
              <option value="IO">British Indian Ocean Territory</option>
              <option value="VG">British Virgin Islands</option>
              <option value="BN">Brunei</option>
              <option value="BG">Bulgaria</option>
              <option value="BF">Burkina Faso</option>
              <option value="BI">Burundi</option>
              <option value="KH">Cambodia</option>
              <option value="CM">Cameroon</option>
              <option value="CA">Canada</option>
              <option value="CV">Cape Verde</option>
              <option value="KY">Cayman Islands</option>
              <option value="CF">Central African Republic</option>
              <option value="TD">Chad</option>
              <option value="CL">Chile</option>
              <option value="CN">China</option>
              <option value="CX">Christmas Island</option>
              <option value="CC">Cocos (Keeling) Islands</option>
              <option value="CO">Colombia</option>
              <option value="KM">Comoros</option>
              <option value="CG">Congo (Brazzaville)</option>
              <option value="CD">Congo (Kinshasa)</option>
              <option value="CK">Cook Islands</option>
              <option value="CR">Costa Rica</option>
              <option value="HR">Croatia</option>
              <option value="CU">Cuba</option>
              <option value="CW">CuraÃ§ao</option>
              <option value="CY">Cyprus</option>
              <option value="CZ">Czech Republic</option>
              <option value="DK">Denmark</option>
              <option value="DJ">Djibouti</option>
              <option value="DM">Dominica</option>
              <option value="DO">Dominican Republic</option>
              <option value="EC">Ecuador</option>
              <option value="EG">Egypt</option>
              <option value="SV">El Salvador</option>
              <option value="GQ">Equatorial Guinea</option>
              <option value="ER">Eritrea</option>
              <option value="EE">Estonia</option>
              <option value="ET">Ethiopia</option>
              <option value="FK">Falkland Islands</option>
              <option value="FO">Faroe Islands</option>
              <option value="FJ">Fiji</option>
              <option value="FI">Finland</option>
              <option value="FR">France</option>
              <option value="GF">French Guiana</option>
              <option value="PF">French Polynesia</option>
              <option value="TF">French Southern Territories</option>
              <option value="GA">Gabon</option>
              <option value="GM">Gambia</option>
              <option value="GE">Georgia</option>
              <option value="DE">Germany</option>
              <option value="GH">Ghana</option>
              <option value="GI">Gibraltar</option>
              <option value="GR">Greece</option>
              <option value="GL">Greenland</option>
              <option value="GD">Grenada</option>
              <option value="GP">Guadeloupe</option>
              <option value="GU">Guam</option>
              <option value="GT">Guatemala</option>
              <option value="GG">Guernsey</option>
              <option value="GN">Guinea</option>
              <option value="GW">Guinea-Bissau</option>
              <option value="GY">Guyana</option>
              <option value="HT">Haiti</option>
              <option value="HM">Heard Island and McDonald Islands</option>
              <option value="HN">Honduras</option>
              <option value="HK">Hong Kong S.A.R., China</option>
              <option value="HU">Hungary</option>
              <option value="IS">Iceland</option>
              <option value="IN">India</option>
              <option value="ID">Indonesia</option>
              <option value="IR">Iran</option>
              <option value="IQ">Iraq</option>
              <option value="IE">Ireland</option>
              <option value="IM">Isle of Man</option>
              <option value="IL">Israel</option>
              <option value="IT">Italy</option>
              <option value="CI">Ivory Coast</option>
              <option value="JM">Jamaica</option>
              <option value="JP">Japan</option>
              <option value="JE">Jersey</option>
              <option value="JO">Jordan</option>
              <option value="KZ">Kazakhstan</option>
              <option value="KE">Kenya</option>
              <option value="KI">Kiribati</option>
              <option value="KW">Kuwait</option>
              <option value="KG">Kyrgyzstan</option>
              <option value="LA">Laos</option>
              <option value="LV">Latvia</option>
              <option value="LB">Lebanon</option>
              <option value="LS">Lesotho</option>
              <option value="LR">Liberia</option>
              <option value="LY">Libya</option>
              <option value="LI">Liechtenstein</option>
              <option value="LT">Lithuania</option>
              <option value="LU">Luxembourg</option>
              <option value="MO">Macao S.A.R., China</option>
              <option value="MK">Macedonia</option>
              <option value="MG">Madagascar</option>
              <option value="MW">Malawi</option>
              <option value="MY">Malaysia</option>
              <option value="MV">Maldives</option>
              <option value="ML">Mali</option>
              <option value="MT">Malta</option>
              <option value="MH">Marshall Islands</option>
              <option value="MQ">Martinique</option>
              <option value="MR">Mauritania</option>
              <option value="MU">Mauritius</option>
              <option value="YT">Mayotte</option>
              <option value="MX">Mexico</option>
              <option value="FM">Micronesia</option>
              <option value="MD">Moldova</option>
              <option value="MC">Monaco</option>
              <option value="MN">Mongolia</option>
              <option value="ME">Montenegro</option>
              <option value="MS">Montserrat</option>
              <option value="MA">Morocco</option>
              <option value="MZ">Mozambique</option>
              <option value="MM">Myanmar</option>
              <option value="NA">Namibia</option>
              <option value="NR">Nauru</option>
              <option value="NP">Nepal</option>
              <option value="NL">Netherlands</option>
              <option value="AN">Netherlands Antilles</option>
              <option value="NC">New Caledonia</option>
              <option value="NZ">New Zealand</option>
              <option value="NI">Nicaragua</option>
              <option value="NE">Niger</option>
              <option value="NG">Nigeria</option>
              <option value="NU">Niue</option>
              <option value="NF">Norfolk Island</option>
              <option value="MP">Northern Mariana Islands</option>
              <option value="KP">North Korea</option>
              <option value="NO">Norway</option>
              <option value="OM">Oman</option>
              <option value="PK">Pakistan</option>
              <option value="PW">Palau</option>
              <option value="PS">Palestinian Territory</option>
              <option value="PA">Panama</option>
              <option value="PG">Papua New Guinea</option>
              <option value="PY">Paraguay</option>
              <option value="PE">Peru</option>
              <option value="PH">Philippines</option>
              <option value="PN">Pitcairn</option>
              <option value="PL">Poland</option>
              <option value="PT">Portugal</option>
              <option value="PR">Puerto Rico</option>
              <option value="QA">Qatar</option>
              <option value="RE">Reunion</option>
              <option value="RO">Romania</option>
              <option value="RU">Russia</option>
              <option value="RW">Rwanda</option>
              <option value="BL">Saint BarthÃ©lemy</option>
              <option value="SH">Saint Helena</option>
              <option value="KN">Saint Kitts and Nevis</option>
              <option value="LC">Saint Lucia</option>
              <option value="MF">Saint Martin (French part)</option>
              <option value="PM">Saint Pierre and Miquelon</option>
              <option value="VC">Saint Vincent and the Grenadines</option>
              <option value="WS">Samoa</option>
              <option value="SM">San Marino</option>
              <option value="ST">Sao Tome and Principe</option>
              <option value="SA">Saudi Arabia</option>
              <option value="SN">Senegal</option>
              <option value="RS">Serbia</option>
              <option value="SC">Seychelles</option>
              <option value="SL">Sierra Leone</option>
              <option value="SG">Singapore</option>
              <option value="SK">Slovakia</option>
              <option value="SI">Slovenia</option>
              <option value="SB">Solomon Islands</option>
              <option value="SO">Somalia</option>
              <option value="ZA">South Africa</option>
              <option value="GS">South Georgia and the South Sandwich Islands</option>
              <option value="KR">South Korea</option>
              <option value="ES">Spain</option>
              <option value="LK">Sri Lanka</option>
              <option value="SD">Sudan</option>
              <option value="SR">Suriname</option>
              <option value="SJ">Svalbard and Jan Mayen</option>
              <option value="SZ">Swaziland</option>
              <option value="SE">Sweden</option>
              <option value="CH">Switzerland</option>
              <option value="SY">Syria</option>
              <option value="TW">Taiwan</option>
              <option value="TJ">Tajikistan</option>
              <option value="TZ">Tanzania</option>
              <option value="TH">Thailand</option>
              <option value="TL">Timor-Leste</option>
              <option value="TG">Togo</option>
              <option value="TK">Tokelau</option>
              <option value="TO">Tonga</option>
              <option value="TT">Trinidad and Tobago</option>
              <option value="TN">Tunisia</option>
              <option value="TR">Turkey</option>
              <option value="TM">Turkmenistan</option>
              <option value="TC">Turks and Caicos Islands</option>
              <option value="TV">Tuvalu</option>
              <option value="VI">U.S. Virgin Islands</option>
              <option value="UG">Uganda</option>
              <option value="UA">Ukraine</option>
              <option value="AE">United Arab Emirates</option>
              <option value="GB">United Kingdom</option>
              <option value="US">United States</option>
              <option value="UM">United States Minor Outlying Islands</option>
              <option value="UY">Uruguay</option>
              <option value="UZ">Uzbekistan</option>
              <option value="VU">Vanuatu</option>
              <option value="VA">Vatican</option>
              <option value="VE">Venezuela</option>
              <option value="VN">Vietnam</option>
              <option value="WF">Wallis and Futuna</option>
              <option value="EH">Western Sahara</option>
              <option value="YE">Yemen</option>
              <option value="ZM">Zambia</option>
              <option value="ZW">Zimbabwe</option>
            </select>
          </div>
        </fieldset>
        <fieldset>
          <legend>Database</legend>
          <div class="form-item">
            <label for="database-name">Name:</label>
            <input type="text" id="database-name" name="database[name]" placeholder="Enter database name" value="<?php print isset($_GET['database']['name']) ? check_plain($_GET['database']['name']) : ''; ?>" required />
          </div>
          <div class="form-item">
            <label for="database-user">User:</label>
            <input type="text" id="database-user" name="database[user]" placeholder="Enter database user" value="<?php print isset($_GET['database']['user']) ? check_plain($_GET['database']['user']) : ''; ?>" required />
          </div>
          <div class="form-item">
            <label for="database-password">Password:</label>
            <input type="password" id="database-password" name="database[pass]" placeholder="Enter database password" value="<?php print isset($_GET['database']['pass']) ?check_plain($_GET['database']['pass']) : ''; ?>" />
          </div>
          <div class="form-item">
            <input type="checkbox" id="database-more" />
            <label for="database-more" class="option">More settings</label>
          </div>
          <div id="database-more-settings">
            <div class="form-item">
              <label for="database-host">Host:</label>
              <input type="text" id="database-host" name="database[host]" placeholder="Enter database host" value="localhost" value="<?php print isset($_GET['database']['host']) ? check_plain($_GET['database']['host']) : ''; ?>" required />
            </div>
            <div class="form-item">
              <label for="database-prefix">Prefix:</label>
              <input type="text" id="database-prefix" name="database[prefix]" placeholder="Enter database prefix" value="<?php print isset($_GET['database']['prefix']) ? check_plain($_GET['database']['prefix']) : ''; ?>" />
            </div>
            <div class="form-item">
              <label for="database-prefix">Port:</label>
              <input type="number" id="database-port" name="database[port]" placeholder="Enter database port" value="<?php print isset($_GET['database']['port']) ? check_plain($_GET['database']['port']) : ''; ?>" />
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>Account</legend>
          <div class="form-item">
            <label for="account-user">User name:</label>
            <input type="text" id="account-user" name="account[name]" placeholder="Enter user name" value="<?php print isset($_GET['account']['name']) ? check_plain($_GET['account']['name']) : ''; ?>" />
          </div>
          <div class="form-item">
            <label for="account-password">Password:</label>
            <input type="password" id="account-password" name="account[pass]" placeholder="Enter password" value="<?php print isset($_GET['account']['pass']) ? check_plain($_GET['account']['pass']) : ''; ?>" />
          </div>
          <div class="form-item">
            <label for="account-mail">Email address:</label>
            <input type="email" id="account-mail" name="account[mail]" placeholder="Enter email address" value="<?php print isset($_GET['account']['mail']) ? check_plain($_GET['account']['mail']) : ''; ?>" />
          </div>
        </fieldset>
        </div>
        <div id="advanced-settings">
        <div class="form-item">
          <label for="advanced-settings-trigger"><input type="checkbox" id="advanced-settings-trigger" /> Advanced settings</label>
        </div>
        <fieldset>
          <legend>Drush make file</legend>
          <div class="form-item">
            <label for="make-file-url">Make file URL</label>
            <input type="url" id="make-file-url" name="make[url]" placeholder="Enter make file url" value="<?php print isset($_GET['make']['url']) ? check_plain($_GET['make']['url']) : ''; ?>" />
          </div>
         <div class="form-item">
           <label for="make-path">Build path</label>
           <input type="text" id="make-path" name="make[path]" placeholder="Enter build path" value="<?php print isset($_GET['make']['path']) ? check_plain($_GET['make']['path']) : ''; ?>" />
         </div>
        </fieldset>
        <fieldset>
          <legend>Custom files</legend>
          <div class="form-item">
            <label for="files-gitignore">.gitignore</label>
            <input type="url" id="files-gitignore" name="files[gitignore]" placeholder="Enter .gitignore path" value="<?php print isset($_GET['files']['gitignore']) ? check_plain($_GET['files']['gitignore']) : ''; ?>" />
          </div>
          <div class="form-item">
            <label for="files-htaccess">.htaccess</label>
            <input type="url" id="files-htaccess" name="files[htaccess]" placeholder="Enter .htaccess path" value="<?php print isset($_GET['files']['htaccess']) ? check_plain($_GET['files']['htaccess']) : ''; ?>" />
          </div>
        </fieldset>
        </div>
        <div class="form-actions">
          <input type="submit" value="Generate" />
        </div>
      </form>
      <div id="code-wrapper">
        <div id="copy-code-wrapper"><span id="copy-code">Copy</span></div>
        <div id="code"></div>
      </div>
    </div>
    
    <a href="https://github.com/yannickoo/drush-si-builder" class="github-corner"><svg width="80px" height="80px" viewBox="0 0 250 250" style="fill:#151513; color:#fff; position: absolute; top: 0; border: 0; right: 0;"><path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path><path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path></svg></a><style>.github-corner:hover .octo-arm{animation:octocat-wave 560ms ease-in-out}@keyframes octocat-wave{0%,100%{transform:rotate(0)}20%,60%{transform:rotate(-25deg)}40%,80%{transform:rotate(10deg)}}@media (max-width:500px){.github-corner:hover .octo-arm{animation:none}.github-corner .octo-arm{animation:octocat-wave 560ms ease-in-out}}</style>

    <script src="js/jquery.min.js"></script>
    <script src="js/ZeroClipboard.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

