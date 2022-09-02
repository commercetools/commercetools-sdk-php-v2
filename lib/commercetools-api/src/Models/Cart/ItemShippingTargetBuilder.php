<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

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

     * @var ?string
     */
    private $shippingMethodKey;

    /**
     * <p>The key of the address in the cart's <code>itemShippingAddresses</code></p>
     *

     * @return null|string
     */
    public function getAddressKey()
    {
        return $this->addressKey;
    }

    /**
     * <p>The quantity of items that should go to the address with the specified <code>addressKey</code>.
     * Only positive values are allowed.
     * Using <code>0</code> as quantity is also possible in a draft object, but the element will not be present in the resulting ItemShippingDetails.</p>
     *

     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <p>User-defined unique identifier of the Shipping Method in a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     * <p>It connects Line Item quantities with individual shipping addresses.</p>
     *

     * @return null|string
     */
    public function getShippingMethodKey()
    {
        return $this->shippingMethodKey;
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

    /**
     * @param ?string $shippingMethodKey
     * @return $this
     */
    public function withShippingMethodKey(?string $shippingMethodKey)
    {
        $this->shippingMethodKey = $shippingMethodKey;

        return $this;
    }


    public function build(): ItemShippingTarget
    {
        return new ItemShippingTargetModel(
            $this->addressKey,
            $this->quantity,
            $this->shippingMethodKey
        );
    }

    public static function of(): ItemShippingTargetBuilder
    {
        return new self();
    }
}
