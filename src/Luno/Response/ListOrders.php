<?php declare(strict_types=1);

namespace Luno\Response;

class ListOrders extends AbstractResponse
{
    protected $orders;

    /**
     * @return \Luno\Types\Order[]
     */
    public function getOrders(): array
    {
        if (!isset($this->orders)) {
            return [];
        }
        return $this->orders;
    }

    /**
     * @param \Luno\Types\Order[] $orders
     */
    public function setOrders(array|null $orders)
    {
        if($orders === null) {
            $orders = [];
        }
        $this->orders = $orders;
    }
}

// vi: ft=php
