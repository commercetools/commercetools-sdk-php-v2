<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ItemShippingTarget>
 */
final class ItemShippingTargetBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $quantity;

    /**
     * @var ?string
     */
    private $addressKey;

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return null|string
     */
    public function getAddressKey()
    {
        return $this->addressKey;
    }

    /**
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAddressKey(?string $addressKey)
    {
        $this->addressKey = $addressKey;

        return $this;
    }

    public function build(): ItemShippingTarget
    {
        return new ItemShippingTargetModel(
            $this->quantity,
            $this->addressKey
        );
    }

    public static function of(): ItemShippingTargetBuilder
    {
        return new self();
    }
}
