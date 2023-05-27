<?php
use Doctrine\DBAL\Tools\Console\ConnectionProvider\SingleConnectionProvider;

// You can append new commands to $commands array, if needed

// replace with the mechanism to retrieve DBAL connection(s) in your app
// and return a Doctrine\DBAL\Tools\Console\ConnectionProvider instance.
$connection = getDBALConnection();

// in case you have a single connection you can use SingleConnectionProvider
// otherwise you need to implement the Doctrine\DBAL\Tools\Console\ConnectionProvider interface with your custom logic
return new SingleConnectionProvider($connection);