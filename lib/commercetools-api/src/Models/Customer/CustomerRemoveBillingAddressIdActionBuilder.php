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
 * @implements Builder<CustomerRemoveBillingAddressIdAction>
 */
final class CustomerRemoveBillingAddressIdActionBuilder implements Builder
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
     * <p><code>id</code> of the <a href="ctp:api:type:Address">Address</a> to remove from <code>billingAddressesIds</code>.</p>
     *

     * @return null|string
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:Address">Address</a> to remove from <code>billingAddressesIds</code>.</p>
     *

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


    public function build(): CustomerRemoveBillingAddressIdAction
    {
        return new CustomerRemoveBillingAddressIdActionModel(
            $this->addressId,
            $this->addressKey
        );
    }

    public static function of(): CustomerRemoveBillingAddressIdActionBuilder
    {
        return new self();
    }
}
