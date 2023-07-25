<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Recaptcha configuration settings
 *
 * recaptcha_sitekey: Recaptcha site key to use in the widget
 * recaptcha_secretkey: Recaptcha secret key which is used for communicating between your server to Google's
 * lang: Language code, if blank "en" will be used
 *
 * recaptcha_sitekey and recaptcha_secretkey can be obtained from https://www.google.com/recaptcha/admin/
 * Language code can be obtained from https://developers.google.com/recaptcha/docs/language
 *
 * @author Damar Riyadi <damar@tahutek.net-->
 */
//localhost
// $config['recaptcha_sitekey'] =  "6LemETQbAAAAAE64iV0SN-6AqIOEzeh03y19bEHW";

// $config['recaptcha_secretkey'] = "6LemETQbAAAAAE2EuXSb5HHtfqb-4nDIFdJ-P9uI";

// $config['lang'] = "id";

// //ip 154
// $config['recaptcha_sitekey'] =  "6LcIoewgAAAAACSOZ7FyuZpp4wasltfHu2CtCbbS";

// $config['recaptcha_secretkey'] = "6LcIoewgAAAAAPGkRGRk3K8RqzGiM1dISrc0ySe-";

// $config['lang'] = "id";

//production pa-bojonegoro.go.id
$config['recaptcha_sitekey'] =  "6LfR3_AgAAAAAH8ac17UFZUWBUeG0AiZw8ezLP1A";

$config['recaptcha_secretkey'] = "6LfR3_AgAAAAAJsjaMEx806JySJU2zARWp1jp2P2";

$config['lang'] = "id";
