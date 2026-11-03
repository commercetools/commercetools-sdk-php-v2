<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CategoryRemoveStoreWithDescendantsAction extends CategoryUpdateAction
{
    public const FIELD_STORE = 'store';

    /**
     * <p>Value to remove from the <code>stores</code> of the Category and each of its descendant Categories.</p>
     * <p>If the Store doesn't exist, a <a href="ctp:api:type:ReferencedResourceNotFoundError">ReferencedResourceNotFound</a> error is returned.</p>
     * <p>If removing the Store leaves the Category without Stores while its parent Category is assigned to Stores, an <a href="ctp:api:type:InvalidInputError">InvalidInput</a> error is returned.</p>
     * <p>If the Store is the only Store of a descendant Category that would then be left without any Store while its parent Category is still assigned to Stores, an <a href="ctp:api:type:InvalidInputError">InvalidInput</a> error is returned.</p>
     *

     * @return null|StoreResourceIdentifier
     */
    public function getStore();

    /**
     * @param ?StoreResourceIdentifier $store
     */
    public function setStore(?StoreResourceIdentifier $store): void;
}
