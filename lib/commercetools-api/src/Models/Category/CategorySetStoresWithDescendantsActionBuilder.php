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
 * @implements Builder<CategorySetStoresWithDescendantsAction>
 */
final class CategorySetStoresWithDescendantsActionBuilder implements Builder
{
    /**

     * @var ?StoreResourceIdentifierCollection
     */
    private $stores;

    /**
     * <p>Value to set on the Category and each of its descendant Categories. It replaces the entire set of <a href="ctp:api:type:Store">Stores</a> assigned to each Category in the subtree.</p>
     * <p>If a Store doesn't exist, a <a href="ctp:api:type:ReferencedResourceNotFoundError">ReferencedResourceNotFound</a> error is returned.</p>
     * <p>If the Category has a parent Category that is assigned to Stores and <code>stores</code> contains a Store the parent isn't assigned to, an <a href="ctp:api:type:InvalidInputError">InvalidInput</a> error is returned.</p>
     * <p>If the Category has a parent Category that is assigned to Stores and <code>stores</code> is empty, an <a href="ctp:api:type:InvalidInputError">InvalidInput</a> error is returned.</p>
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


    public function build(): CategorySetStoresWithDescendantsAction
    {
        return new CategorySetStoresWithDescendantsActionModel(
            $this->stores
        );
    }

    public static function of(): CategorySetStoresWithDescendantsActionBuilder
    {
        return new self();
    }
}
