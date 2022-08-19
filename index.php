<?php

require 'Connection.php';

$config = require 'config.php';

$db = Connection::make($config['database']);


require "index.view.php";