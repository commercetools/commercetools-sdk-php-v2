<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderSetOrderNumberAction>
 */
final class OrderSetOrderNumberActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $orderNumber;

    /**
     * @return null|string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @return $this
     */
    public function withOrderNumber(?string $orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    public function build(): OrderSetOrderNumberAction
    {
        return new OrderSetOrderNumberActionModel(
            $this->orderNumber
        );
    }

    public static function of(): OrderSetOrderNumberActionBuilder
    {
        return new self();
    }
}
