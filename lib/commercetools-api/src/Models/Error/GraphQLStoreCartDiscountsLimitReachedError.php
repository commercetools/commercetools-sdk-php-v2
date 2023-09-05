<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Store\StoreKeyReferenceCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLStoreCartDiscountsLimitReachedError extends GraphQLErrorObject
{
    public const FIELD_STORES = 'stores';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Stores for which the limit for active Cart Discounts that can exist has been reached.</p>
     *

     * @return null|StoreKeyReferenceCollection
     */
    public function getStores();

    /**
     * @param ?StoreKeyReferenceCollection $stores
     */
    public function setStores(?StoreKeyReferenceCollection $stores): void;
}
