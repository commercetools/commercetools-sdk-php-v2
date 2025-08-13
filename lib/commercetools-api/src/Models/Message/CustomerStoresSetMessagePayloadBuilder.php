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
 * @implements Builder<CustomerStoresSetMessagePayload>
 */
final class CustomerStoresSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?StoreKeyReferenceCollection
     */
    private $stores;

    /**

     * @var ?StoreKeyReferenceCollection
     */
    private $oldStores;

    /**
     * <p>The <a href="ctp:api:type:Store">Stores</a> the <a href="ctp:api:type:Customer">Customer</a> is associated with after the <a href="ctp:api:type:CustomerSetStoresAction">Set Stores</a> update action.</p>
     *

     * @return null|StoreKeyReferenceCollection
     */
    public function getStores()
    {
        return $this->stores;
    }

    /**
     * <p>The <a href="ctp:api:type:Store">Stores</a> the <a href="ctp:api:type:Customer">Customer</a> was associated with before the <a href="ctp:api:type:CustomerSetStoresAction">Set Stores</a> update action.</p>
     *

     * @return null|StoreKeyReferenceCollection
     */
    public function getOldStores()
    {
        return $this->oldStores;
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
     * @param ?StoreKeyReferenceCollection $oldStores
     * @return $this
     */
    public function withOldStores(?StoreKeyReferenceCollection $oldStores)
    {
        $this->oldStores = $oldStores;

        return $this;
    }


    public function build(): CustomerStoresSetMessagePayload
    {
        return new CustomerStoresSetMessagePayloadModel(
            $this->stores,
            $this->oldStores
        );
    }

    public static function of(): CustomerStoresSetMessagePayloadBuilder
    {
        return new self();
    }
}
