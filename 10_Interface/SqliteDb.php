<?php

class SqliteDb implements DatabaseInterface
{
    public function getOrders(): array
    {
        echo "Calling method " . __METHOD__ . "<br>";
        return [];
    }

    public function getOrderById(int $id)
    {
        echo "Calling method " . __METHOD__ . "<br>";
    }

    public function createOrder(array $data): bool
    {
        echo "Calling method " . __METHOD__ . "<br>";
        return true;
    }

    public function updateOrder(int $id, array $data): bool
    {
        echo "Calling method " . __METHOD__ . "<br>";
        return true;
    }

    public function deleteOrder(int $id): bool
    {
        echo "Calling method " . __METHOD__ . "<br>";
        return true;
    }
}