<?php
define("USERNAME", "o.mihaylova@ltcompany.com.erp");
define("PASSWORD", "Boss0804");
define("SECURITY_TOKEN", "sdfhkjwrhgfwrgergp");

require_once ('./soapclient/SforceEnterpriseClient.php');

$mySforceConnection = new SforceEnterpriseClient();
$mySforceConnection->createConnection("wsdl.xml");
$mySforceConnection->login(USERNAME, PASSWORD);

