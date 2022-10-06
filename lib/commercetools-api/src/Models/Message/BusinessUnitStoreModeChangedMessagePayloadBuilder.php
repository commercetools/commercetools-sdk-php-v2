<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Store\StoreKeyReferenceCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BusinessUnitStoreModeChangedMessagePayload>
 */
final class BusinessUnitStoreModeChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?StoreKeyReferenceCollection
     */
    private $stores;

    /**

     * @var ?string
     */
    private $storeMode;

    /**

     * @var ?StoreKeyReferenceCollection
     */
    private $oldStores;

    /**

     * @var ?string
     */
    private $oldStoreMode;

    /**
     * <p><a href="ctp:api:type:Store">Stores</a> of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> after the <a href="ctp:api:type:BusinessUnitSetStoreModeAction">Set Store Mode</a> update action.</p>
     *

     * @return null|StoreKeyReferenceCollection
     */
    public function getStores()
    {
        return $this->stores;
    }

    /**
     * <p><a href="ctp:api:type:BusinessUnitStoreMode">BusinessUnitStoreMode</a> of the Business Unit after the <a href="ctp:api:type:BusinessUnitSetStoreModeAction">Set Store Mode</a> update action.</p>
     *

     * @return null|string
     */
    public function getStoreMode()
    {
        return $this->storeMode;
    }

    /**
     * <p><a href="ctp:api:type:Store">Stores</a> of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> before the <a href="ctp:api:type:BusinessUnitSetStoreModeAction">Set Store Mode</a> update action.</p>
     *

     * @return null|StoreKeyReferenceCollection
     */
    public function getOldStores()
    {
        return $this->oldStores;
    }

    /**
     * <p><a href="ctp:api:type:BusinessUnitStoreMode">BusinessUnitStoreMode</a> of the Business Unit before the <a href="ctp:api:type:BusinessUnitSetStoreModeAction">Set Store Mode</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldStoreMode()
    {
        return $this->oldStoreMode;
    }

    /**
     * @param ?StoreKeyReferenceCollection $stores
     * @return $this
     */
    public function withStores(?StoreKeyReferenceCollection $stores)
    {
        $this->stores = $stores;

        return $this;
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
     * @param ?StoreKeyReferenceCollection $oldStores
     * @return $this
     */
    public function withOldStores(?StoreKeyReferenceCollection $oldStores)
    {
        $this->oldStores = $oldStores;

        return $this;
    }

    /**
     * @param ?string $oldStoreMode
     * @return $this
     */
    public function withOldStoreMode(?string $oldStoreMode)
    {
        $this->oldStoreMode = $oldStoreMode;

        return $this;
    }


    public function build(): BusinessUnitStoreModeChangedMessagePayload
    {
        return new BusinessUnitStoreModeChangedMessagePayloadModel(
            $this->stores,
            $this->storeMode,
            $this->oldStores,
            $this->oldStoreMode
        );
    }

    public static function of(): BusinessUnitStoreModeChangedMessagePayloadBuilder
    {
        return new self();
    }
}
