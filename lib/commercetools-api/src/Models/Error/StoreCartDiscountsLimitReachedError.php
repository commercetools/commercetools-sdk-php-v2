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

interface StoreCartDiscountsLimitReachedError extends ErrorObject
{
    public const FIELD_STORES = 'stores';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;Maximum number of active cart discounts reached for $stores.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Stores for which the limit for active Cart Discounts that can exist has been reached.</p>
     *

     * @return null|StoreKeyReferenceCollection
     */
    public function getStores();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?StoreKeyReferenceCollection $stores
     */
    public function setStores(?StoreKeyReferenceCollection $stores): void;
}
