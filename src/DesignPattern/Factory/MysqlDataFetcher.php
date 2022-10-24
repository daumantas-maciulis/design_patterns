<?php

declare(strict_types = 1);

namespace App\DesignPattern\Factory;

/**
 * Class App\DesignPattern\Factory\MysqlDataFetcher
 */
class MysqlDataFetcher extends AbstractDataFetcher
{
    private string $username;

    private string $password;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function getDataSource(): DataSourceConnectorInterface
    {
        return new MysqlConnector($this->username, $this->password);
    }
}