<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ItemShippingTarget>
 */
final class ItemShippingTargetBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $addressKey;

    /**
     * @var ?float
     */
    private $quantity;

    /**
     * <p>Maps to <code>ItemShippingTarget.addressKey</code>.</p>
     *
     * @return null|string
     */
    public function getAddressKey()
    {
        return $this->addressKey;
    }

    /**
     * <p>Maps to <code>ItemShippingTarget.quantity</code>.</p>
     *
     * @return null|float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param ?string $addressKey
     * @return $this
     */
    public function withAddressKey(?string $addressKey)
    {
        $this->addressKey = $addressKey;

        return $this;
    }

    /**
     * @param ?float $quantity
     * @return $this
     */
    public function withQuantity(?float $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }


    public function build(): ItemShippingTarget
    {
        return new ItemShippingTargetModel(
            $this->addressKey,
            $this->quantity
        );
    }

    public static function of(): ItemShippingTargetBuilder
    {
        return new self();
    }
}
