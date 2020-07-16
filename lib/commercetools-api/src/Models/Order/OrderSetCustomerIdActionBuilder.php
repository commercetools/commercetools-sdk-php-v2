<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderSetCustomerIdAction>
 */
final class OrderSetCustomerIdActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $customerId;

    /**
     * @return null|string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param ?string $customerId
     * @return $this
     */
    public function withCustomerId(?string $customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }


    public function build(): OrderSetCustomerIdAction
    {
        return new OrderSetCustomerIdActionModel(
            $this->customerId
        );
    }

    public static function of(): OrderSetCustomerIdActionBuilder
    {
        return new self();
    }
}
