<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BusinessUnitSetStoresAction>
 */
final class BusinessUnitSetStoresActionBuilder implements Builder
{
    /**

     * @var ?StoreResourceIdentifierCollection
     */
    private $stores;

    /**
     * <p><a href="ctp:api:type:Store">Stores</a> to set. Overrides the current list of Stores.</p>
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


    public function build(): BusinessUnitSetStoresAction
    {
        return new BusinessUnitSetStoresActionModel(
            $this->stores
        );
    }

    public static function of(): BusinessUnitSetStoresActionBuilder
    {
        return new self();
    }
}
