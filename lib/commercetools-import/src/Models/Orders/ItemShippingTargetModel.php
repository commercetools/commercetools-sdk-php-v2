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
     * @var ?string
     */
    protected $addressKey;

    /**
     * @var ?float
     */
    protected $quantity;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $addressKey = null,
        ?float $quantity = null
    ) {
        $this->addressKey = $addressKey;
        $this->quantity = $quantity;
    }

    /**
     * <p>Maps to <code>ItemShippingTarget.addressKey</code>.</p>
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
     * <p>Maps to <code>ItemShippingTarget.quantity</code>.</p>
     *
     * @return null|float
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (float) $data;
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
     * @param ?float $quantity
     */
    public function setQuantity(?float $quantity): void
    {
        $this->quantity = $quantity;
    }
}
