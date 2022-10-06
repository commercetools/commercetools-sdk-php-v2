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
 * @implements Builder<MyBusinessUnitRemoveBillingAddressIdAction>
 */
final class MyBusinessUnitRemoveBillingAddressIdActionBuilder implements Builder
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
     * <p>ID of the billing address to be removed. Either <code>addressId</code> or <code>addressKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * <p>Key of the billing address to be removed. Either <code>addressId</code> or <code>addressKey</code> is required.</p>
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


    public function build(): MyBusinessUnitRemoveBillingAddressIdAction
    {
        return new MyBusinessUnitRemoveBillingAddressIdActionModel(
            $this->addressId,
            $this->addressKey
        );
    }

    public static function of(): MyBusinessUnitRemoveBillingAddressIdActionBuilder
    {
        return new self();
    }
}
