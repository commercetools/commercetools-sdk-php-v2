<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ShippingMethodSetStoresAction>
 */
final class ShippingMethodSetStoresActionBuilder implements Builder
{
    /**

     * @var ?StoreResourceIdentifierCollection
     */
    private $stores;

    /**
     * <p>ResourceIdentifiers of the Stores to set.
     * Overrides the current list of Stores.
     * Set to an empty array to remove all existing values.</p>
     *

     * @return null|StoreResourceIdentifierCollection
     */
    public function getStores()
    {
        return $this->stores;
    }

    /**
     * @param ?StoreResourceIdentifierCollection $stores
     * @return $this
     */
    public function withStores(?StoreResourceIdentifierCollection $stores)
    {
        $this->stores = $stores;

        return $this;
    }


    public function build(): ShippingMethodSetStoresAction
    {
        return new ShippingMethodSetStoresActionModel(
            $this->stores
        );
    }

    public static function of(): ShippingMethodSetStoresActionBuilder
    {
        return new self();
    }
}
