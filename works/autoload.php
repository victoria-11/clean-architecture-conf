<?php

require_once(__DIR__ . '/entities/EntityInterface.php');
require_once(__DIR__ . '/entities/Section.php');
require_once(__DIR__ . '/entities/University.php');
require_once(__DIR__ . '/entities/User.php');
require_once(__DIR__ . '/entities/Work.php');
require_once(__DIR__ . '/entities/WorkStatus.php');

require_once(__DIR__ . '/repositories/RepositoryInterface.php');
require_once(__DIR__ . '/repositories/WorkRepository.php');
require_once(__DIR__ . '/repositories/UserRepository.php');
require_once(__DIR__ . '/repositories/SectionRepository.php');
require_once(__DIR__ . '/repositories/WorkStatusRepository.php');

require_once(__DIR__ . '/validation/ValidationInterface.php');
require_once(__DIR__ . '/validation/WorkValidation.php');

require_once(__DIR__ . '/usecases/UsecaseInterface.php');
require_once(__DIR__ . '/usecases/CreateWork.php');
require_once(__DIR__ . '/usecases/CheckWork.php');

require_once(__DIR__ . '/deliveries/WorkController.php');
