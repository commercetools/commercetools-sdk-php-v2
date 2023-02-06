<?php

namespace Commercetools\IntegrationTest\Api\Order;

use Commercetools\Api\Models\Order\Order;
use Commercetools\IntegrationTest\ApiTestCase;

class OrderCreateTest extends ApiTestCase
{
    public function testOrderIsCreated()
    {
        $builder = $this->getApiBuilder();

        OrderFixture::withOrder(
            $builder,
            function (Order $order) use ($builder) {
                $this->assertInstanceOf(Order::class, $order);
                $this->assertNotEmpty($order);
                $this->assertNotEmpty($order->getCart());
            }
        );
    }
}
