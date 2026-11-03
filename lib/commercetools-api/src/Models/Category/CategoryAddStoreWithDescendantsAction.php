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

interface CategoryAddStoreWithDescendantsAction extends CategoryUpdateAction
{
    public const FIELD_STORE = 'store';

    /**
     * <p>Value to add to the <code>stores</code> of the Category and each of its descendant Categories.</p>
     * <p>If the Store doesn't exist, a <a href="ctp:api:type:ReferencedResourceNotFoundError">ReferencedResourceNotFound</a> error is returned.</p>
     * <p>If the Category has a parent Category that is assigned to Stores and the Store isn't one of them, an <a href="ctp:api:type:InvalidInputError">InvalidInput</a> error is returned.</p>
     * <p>If the Category isn't assigned to any Store and one of its descendant Categories is assigned to a different Store, an <a href="ctp:api:type:InvalidInputError">InvalidInput</a> error is returned.</p>
     *

     * @return null|StoreResourceIdentifier
     */
    public function getStore();

    /**
     * @param ?StoreResourceIdentifier $store
     */
    public function setStore(?StoreResourceIdentifier $store): void;
}
