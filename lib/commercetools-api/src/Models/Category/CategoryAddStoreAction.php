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

interface CategoryAddStoreAction extends CategoryUpdateAction
{
    public const FIELD_STORE = 'store';

    /**
     * <p>Value to add to the Category's <code>stores</code>.</p>
     * <p>When called through an <a href="#update-category-in-store">in-Store endpoint</a>, the caller must have permission for the referenced <a href="ctp:api:type:Store">Store</a>.</p>
     *

     * @return null|StoreResourceIdentifier
     */
    public function getStore();

    /**
     * @param ?StoreResourceIdentifier $store
     */
    public function setStore(?StoreResourceIdentifier $store): void;
}
