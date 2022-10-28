<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyCustomerSetDefaultBillingAddressAction>
 */
final class MyCustomerSetDefaultBillingAddressActionBuilder implements Builder
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
     * <p><code>id</code> of the <a href="ctp:api:type:Address">Address</a> to become the default billing address.</p>
     *

     * @return null|string
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:Address">Address</a> to become the default billing address.</p>
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


    public function build(): MyCustomerSetDefaultBillingAddressAction
    {
        return new MyCustomerSetDefaultBillingAddressActionModel(
            $this->addressId,
            $this->addressKey
        );
    }

    public static function of(): MyCustomerSetDefaultBillingAddressActionBuilder
    {
        return new self();
    }
}
