<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerSetDefaultShippingAddressAction>
 */
final class CustomerSetDefaultShippingAddressActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $addressId;

    /**
     * @var ?string
     */
    private $addressKey;

    /**
     * <p>If not defined, the customer's <code>defaultShippingAddress</code> is unset.</p>
     *
     * @return null|string
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * @return null|string
     */
    public function getAddressKey()
    {
        return $this->addressKey;
    }

    /**
     * @param ?string $addressId
     * @return $this
     */
    public function withAddressId(?string $addressId)
    {
        $this->addressId = $addressId;

        return $this;
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


    public function build(): CustomerSetDefaultShippingAddressAction
    {
        return new CustomerSetDefaultShippingAddressActionModel(
            $this->addressId,
            $this->addressKey
        );
    }

    public static function of(): CustomerSetDefaultShippingAddressActionBuilder
    {
        return new self();
    }
}
