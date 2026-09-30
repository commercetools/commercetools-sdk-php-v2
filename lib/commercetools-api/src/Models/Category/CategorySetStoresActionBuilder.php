<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CategorySetStoresAction>
 */
final class CategorySetStoresActionBuilder implements Builder
{
    /**

     * @var ?StoreResourceIdentifierCollection
     */
    private $stores;

    /**
     * <p>Value to set. It replaces the entire set of <a href="ctp:api:type:Store">Stores</a> assigned to the Category.</p>
     * <p>If the <code>stores</code> field contains a Store that you do not have permission for, an <a href="ctp:api:type:InvalidInputError">InvalidInput</a> error is returned.</p>
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


    public function build(): CategorySetStoresAction
    {
        return new CategorySetStoresActionModel(
            $this->stores
        );
    }

    public static function of(): CategorySetStoresActionBuilder
    {
        return new self();
    }
}
