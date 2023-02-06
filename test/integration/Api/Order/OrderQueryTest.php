<?php

namespace Commercetools\IntegrationTest\Api\Order;

use Commercetools\Api\Models\Order\Order;
use Commercetools\IntegrationTest\ApiTestCase;

class OrderQueryTest extends ApiTestCase
{
    public function testOrderGetWithPredicate()
    {
        $builder = $this->getApiBuilder();

        OrderFixture::withOrder(
            $builder,
            function (Order $order) use ($builder) {
                $request = $builder->with()->orders()->get()->withWhere("syncInfo is empty");
                $resultWithPredicateVar = $request->execute();

                $this->assertNotEmpty($resultWithPredicateVar);
                $this->assertNotEmpty($order);
                $this->assertNotEmpty($order->getCart());
            }
        );
    }
}
