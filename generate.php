<?php

$values = count($_POST) ? $_POST : FALSE;
if($values) {
  $site = $values['site'];
  $account = $values['account'];
  $database = $values['database'];
  $profile = $values['profile'];
  $make = $values['make'];
  $file = $values['files'];

  $cmd = array();

  if($make['url']) {
    $cmd[] = 'drush make --prepare-install --contrib-destination=.';
    $cmd[] = $make['url'];
    $cmd[] = $make['path'] . '&&';
  }

  if($file['gitignore'] || $file['htaccess']) {
    $files = array();
    if($make['path']) {
      $files[] = 'cd ' . $make['path'];
    }

    if($file['gitignore']) {
      $files[] = 'wget --no-check-certificate -O .gitignore ' . $file['gitignore'];
    }

    if($file['htaccess']) {
      $files[] = 'wget --no-check-certificate -O .htaccess ' . $file['htaccess'];
    }

    $cmd[] = implode(' && ', $files);

    $cmd[] = '&&';
  }

  if($make['path']) {
    $cmd[] = 'cd ' . $make['path'] . ' &&';
  }

  $cmd[] = 'drush site-install';
  $cmd[] = $profile;

  if(!$database['user'] || !$database['name']) {
    print 'Are you kidding me? o_ô';
    return;
  }

  $database_cmd = array();
  $database_cmd[] = '--db-url=mysql://';
  $database_cmd[] = $database['user'];

  if($database['pass']) {
    $database_cmd[] = ':' . $database['pass'];
  }

  $host = ($database['host']) ? $database['host'] : 'localhost';
  $database_cmd[] = '@' . $host;

  if($database['port']) {
    $database_cmd[] = ':' . $database['port'];
  }

  $database_cmd[] = '/' . $database['name'];

  $cmd[] = implode('', $database_cmd);

  $name = ($account['name']) ? $account['name'] : 'admin';
  $pass = ($account['pass']) ? $account['pass'] : generate_password();
  $mail = ($account['mail']) ? $account['mail'] : 'admin@example.com';

  $site_name = ($site['name']) ? $site['name'] : 'Drupal';
  $timezone = ($site['timezone']) ? $site['timezone'] : '';
  $country = ($site['country']) ? $site['country'] : '';

  $cmd[] = '--account-name="' . $name . '"';
  $cmd[] = '--account-pass="' . $pass . '"';
  $cmd[] = '--account-mail=' . $mail;

  $cmd[] = '--site-name="' . $site_name . '"';

  if($timezone) {
    $cmd[] = 'install_configure_form.date_default_timezone="' . $timezone . '"';
  }

  if($country) {
    $cmd[] = 'install_configure_form.site_default_country=' . $country;
  }

  if($database['prefix']) {
    $cmd[] = '--db-prefix=' . $database['prefix'];
  }

  $command = implode(' ', $cmd);
  print $command;
}

function generate_password($length = 16, $add_dashes = FALSE, $available_sets = 'luds') {
  $sets = array();
  if(strpos($available_sets, 'l') !== FALSE)
    $sets[] = 'abcdefghjkmnpqrstuvwxyz';
  if(strpos($available_sets, 'u') !== FALSE)
    $sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
  if(strpos($available_sets, 'd') !== FALSE)
    $sets[] = '23456789';
  if(strpos($available_sets, 's') !== FALSE)
    $sets[] = '!@#|%&*?';

  $all = '';
  $password = '';
  foreach($sets as $set) {
    $password .= $set[array_rand(str_split($set))];
    $all .= $set;
  }

  $all = str_split($all);
  for($i = 0; $i < $length - count($sets); $i++) {
    $password .= $all[array_rand($all)];
  }

  $password = str_shuffle($password);

  if(!$add_dashes) {
    return $password;
  }

  $dash_len = floor(sqrt($length));
  $dash_str = '';
  while(strlen($password) > $dash_len) {
    $dash_str .= substr($password, 0, $dash_len) . '-';
    $password = substr($password, $dash_len);
  }
  $dash_str .= $password;

  return $dash_str;
}
