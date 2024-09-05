<?php

require_once('config/sample_config.php');

$response = SampleConfig::craftgate()->installment()->retrieveBinNumber('650858');

print_r($response);
