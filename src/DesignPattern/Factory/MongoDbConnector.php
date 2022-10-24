<?php

declare(strict_types = 1);

namespace App\DesignPattern\Factory;

/**
 * Class App\DesignPattern\Factory\MongoDbConnector
 */
class MongoDbConnector implements DataSourceConnectorInterface
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
        echo sprintf('Connecting to MongoDB with username: %s, password %s', $this->username, $this->password);
        echo PHP_EOL;
    }

    public function fetchData(string $contentToFetch): string
    {
        return sprintf('Requested content from MongoDb: %s', $contentToFetch);
    }

    public function closeConnection(): void
    {
        echo 'Closing connection to MongoDb';
        echo PHP_EOL;
    }
}
