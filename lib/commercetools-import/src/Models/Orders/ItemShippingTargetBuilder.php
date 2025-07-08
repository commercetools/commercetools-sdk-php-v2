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

     * @var ?int
     */
    private $quantity;

    /**
     * <p>Key of the address in the <a href="ctp:api:type:Cart">Cart</a> <code>itemShippingAddresses</code>. Duplicate address keys are not allowed.</p>
     *

     * @return null|string
     */
    public function getAddressKey()
    {
        return $this->addressKey;
    }

    /**
     * <p>Quantity of Line Items or Custom Line Items shipped to the address with the specified <code>addressKey</code>.</p>
     *

     * @return null|int
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
     * @param ?int $quantity
     * @return $this
     */
    public function withQuantity(?int $quantity)
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
