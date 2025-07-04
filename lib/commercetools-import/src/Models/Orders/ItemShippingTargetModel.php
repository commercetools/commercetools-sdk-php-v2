<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

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
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $addressKey = null,
        ?int $quantity = null
    ) {
        $this->addressKey = $addressKey;
        $this->quantity = $quantity;
    }

    /**
     * <p>Key of the address in the <a href="ctp:api:type:Cart">Cart</a> <code>itemShippingAddresses</code>. Duplicate address keys are not allowed.</p>
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
     * <p>Quantity of Line Items or Custom Line Items shipped to the address with the specified <code>addressKey</code>.</p>
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
}
