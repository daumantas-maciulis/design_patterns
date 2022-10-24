<?php

declare(strict_types = 1);

namespace App\DesignPattern\Factory;

/**
 * Class App\DesignPattern\Factory\MysqlConnector
 */
class MysqlConnector implements DataSourceConnectorInterface
{
    private string $username;

    private string $password;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function connect(): void
    {
        echo sprintf('Connecting to Mysql with username: %s, password %s', $this->username, $this->password);
        echo PHP_EOL;
    }

    public function fetchData(string $contentToFetch): string
    {
        return sprintf('Requested content from Mysql: %s', $contentToFetch);
    }

    public function closeConnection(): void
    {
        echo 'Closing connection to Mysql';
        echo PHP_EOL;
    }
}