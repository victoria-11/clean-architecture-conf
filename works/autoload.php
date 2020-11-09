<?php

require_once(__DIR__ . '/entities/University.php');
require_once(__DIR__ . '/entities/User.php');
require_once(__DIR__ . '/entities/Work.php');
require_once(__DIR__ . '/entities/WorkStatus.php');

require_once(__DIR__ . '/repositories/WorkRepository.php');
require_once(__DIR__ . '/repositories/UserRepository.php');
require_once(__DIR__ . '/repositories/WorkStatusRepository.php');

require_once(__DIR__ . '/validation/WorkValidation.php');

require_once(__DIR__ . '/usecases/CreateWork.php');
require_once(__DIR__ . '/usecases/CheckWork.php');

require_once(__DIR__ . '/deliveries/WorkController.php');
