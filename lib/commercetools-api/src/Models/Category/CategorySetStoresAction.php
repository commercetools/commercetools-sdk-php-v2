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

interface CategorySetStoresAction extends CategoryUpdateAction
{
    public const FIELD_STORES = 'stores';

    /**
     * <p>Value to set. It replaces the entire set of <a href="ctp:api:type:Store">Stores</a> assigned to the Category.</p>
     * <p>If the <code>stores</code> field contains a Store that you do not have permission for, an <a href="ctp:api:type:InvalidInputError">InvalidInput</a> error is returned.</p>
     *

     * @return null|StoreResourceIdentifierCollection
     */
    public function getStores();

    /**
     * @param ?StoreResourceIdentifierCollection $stores
     */
    public function setStores(?StoreResourceIdentifierCollection $stores): void;
}
