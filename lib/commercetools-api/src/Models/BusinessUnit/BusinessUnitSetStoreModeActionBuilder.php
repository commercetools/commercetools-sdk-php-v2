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
 * @implements Builder<BusinessUnitSetStoreModeAction>
 */
final class BusinessUnitSetStoreModeActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $storeMode;

    /**

     * @var ?StoreResourceIdentifierCollection
     */
    private $stores;

    /**
     * <p>Set to <code>Explicit</code> to specify Stores for the Business Unit. Set to <code>FromParent</code> to inherit Stores from a parent.</p>
     *

     * @return null|string
     */
    public function getStoreMode()
    {
        return $this->storeMode;
    }

    /**
     * <p>Set the <a href="ctp:api:type:Store">Stores</a> the Business Unit is associated with. Can only be set if <code>storeMode</code> is <code>Explicit</code>.</p>
     *

     * @return null|StoreResourceIdentifierCollection
     */
    public function getStores()
    {
        return $this->stores;
    }

    /**
     * @param ?string $storeMode
     * @return $this
     */
    public function withStoreMode(?string $storeMode)
    {
        $this->storeMode = $storeMode;

        return $this;
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


    public function build(): BusinessUnitSetStoreModeAction
    {
        return new BusinessUnitSetStoreModeActionModel(
            $this->storeMode,
            $this->stores
        );
    }

    public static function of(): BusinessUnitSetStoreModeActionBuilder
    {
        return new self();
    }
}
