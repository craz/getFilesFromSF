<?php
define("USERNAME", "o.mihaylova@ltcompany.com.erp");
define("PASSWORD", "Boss0804");
define("SECURITY_TOKEN", "sdfhkjwrhgfwrgergp");

require_once ('/soapclient/SforceEnterpriseClient.php');
try{
$mySforceConnection = new SforceEnterpriseClient();
$mySforceConnection->createConnection("wsdl.xml");
$mySforceConnection->login(USERNAME, PASSWORD);
}catch(Exception $e){
    echo $e->getMessage();
}

