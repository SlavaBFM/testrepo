<?php

/*
  Plugin Name: test plugin udpate
  Plugin URI: http://www.bluefountainmedia.com/
  Description: Plugin test
  Version: 0.0.2
 */
require 'plugin-update-checker/plugin-update-checker.php';
$className = PucFactory::getLatestClassVersion('PucGitHubChecker');
$myUpdateChecker = new $className(
    'https://github.com/SlavaBFM/testrepo',
    __FILE__,
    'master'
);