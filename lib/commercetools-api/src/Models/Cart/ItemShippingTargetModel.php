<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ItemShippingTargetModel extends JsonObjectModel implements ItemShippingTarget
{
    /**
     *
     * @var ?string
     */
    protected $addressKey;

    /**
     *
     * @var ?int
     */
    protected $quantity;

    /**
     *
     * @var ?string
     */
    protected $shippingMethodKey;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $addressKey = null,
        ?int $quantity = null,
        ?string $shippingMethodKey = null
    ) {
        $this->addressKey = $addressKey;
        $this->quantity = $quantity;
        $this->shippingMethodKey = $shippingMethodKey;
    }

    /**
     * <p>The key of the address in the cart's <code>itemShippingAddresses</code></p>
     *
     *
     * @return null|string
     */
    public function getAddressKey()
    {
        if (is_null($this->addressKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ADDRESS_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->addressKey = (string) $data;
        }

        return $this->addressKey;
    }

    /**
     * <p>The quantity of items that should go to the address with the specified <code>addressKey</code>.
     * Only positive values are allowed.
     * Using <code>0</code> as quantity is also possible in a draft object, but the element will not be present in the resulting ItemShippingDetails.</p>
     *
     *
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (int) $data;
        }

        return $this->quantity;
    }

    /**
     * <p>User-defined unique identifier of the Shipping Method in a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     * <p>It connects Line Item quantities with individual shipping addresses.</p>
     *
     *
     * @return null|string
     */
    public function getShippingMethodKey()
    {
        if (is_null($this->shippingMethodKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SHIPPING_METHOD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->shippingMethodKey = (string) $data;
        }

        return $this->shippingMethodKey;
    }


    /**
     * @param ?string $addressKey
     */
    public function setAddressKey(?string $addressKey): void
    {
        $this->addressKey = $addressKey;
    }

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param ?string $shippingMethodKey
     */
    public function setShippingMethodKey(?string $shippingMethodKey): void
    {
        $this->shippingMethodKey = $shippingMethodKey;
    }
}
