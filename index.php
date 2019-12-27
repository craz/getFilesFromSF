<?php
define("USERNAME", "o.mihaylova@ltcompany.com.erp");
define("PASSWORD", "Boss0804");
define("SECURITY_TOKEN", "sdfhkjwrhgfwrgergp");

require_once ('./Force.com-Toolkit-for-PHP/soapclient/SforceEnterpriseClient.php');

$mySforceConnection = new SforceEnterpriseClient();
$mySforceConnection->createConnection("wsdl.xml");
$mySforceConnection->login(USERNAME, PASSWORD);

