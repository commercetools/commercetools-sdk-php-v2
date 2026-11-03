<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CategorySetStoresWithDescendantsAction extends CategoryUpdateAction
{
    public const FIELD_STORES = 'stores';

    /**
     * <p>Value to set on the Category and each of its descendant Categories. It replaces the entire set of <a href="ctp:api:type:Store">Stores</a> assigned to each Category in the subtree.</p>
     * <p>If a Store doesn't exist, a <a href="ctp:api:type:ReferencedResourceNotFoundError">ReferencedResourceNotFound</a> error is returned.</p>
     * <p>If the Category has a parent Category that is assigned to Stores and <code>stores</code> contains a Store the parent isn't assigned to, an <a href="ctp:api:type:InvalidInputError">InvalidInput</a> error is returned.</p>
     * <p>If the Category has a parent Category that is assigned to Stores and <code>stores</code> is empty, an <a href="ctp:api:type:InvalidInputError">InvalidInput</a> error is returned.</p>
     *

     * @return null|StoreResourceIdentifierCollection
     */
    public function getStores();

    /**
     * @param ?StoreResourceIdentifierCollection $stores
     */
    public function setStores(?StoreResourceIdentifierCollection $stores): void;
}
