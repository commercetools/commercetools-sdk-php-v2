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
 * @implements Builder<BusinessUnitStoresSetMessagePayload>
 */
final class BusinessUnitStoresSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?StoreKeyReferenceCollection
     */
    private $stores;

    /**
     * <p><a href="ctp:api:type:Store">Stores</a> of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> after the <a href="ctp:api:type:BusinessUnitSetStoresAction">Set Stores</a> update action.</p>
     *

     * @return null|StoreKeyReferenceCollection
     */
    public function getStores()
    {
        return $this->stores;
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


    public function build(): BusinessUnitStoresSetMessagePayload
    {
        return new BusinessUnitStoresSetMessagePayloadModel(
            $this->stores
        );
    }

    public static function of(): BusinessUnitStoresSetMessagePayloadBuilder
    {
        return new self();
    }
}
