<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerSetStoresAction>
 */
final class CustomerSetStoresActionBuilder implements Builder
{
    /**
     * @var ?StoreResourceIdentifierCollection
     */
    private $stores;

    /**
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


    public function build(): CustomerSetStoresAction
    {
        return new CustomerSetStoresActionModel(
            $this->stores
        );
    }

    public static function of(): CustomerSetStoresActionBuilder
    {
        return new self();
    }
}
