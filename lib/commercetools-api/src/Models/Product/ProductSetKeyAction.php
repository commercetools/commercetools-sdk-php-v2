<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSetKeyAction extends ProductUpdateAction
{
    public const FIELD_KEY = 'key';

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     * <p>To update a Product using the <a href="/../api/import-export/">Import API</a> and the <a href="/../merchant-center/import-data">Merchant Center</a>, the Product <code>key</code> must match the pattern <code>^[A-Za-z0-9_-]{2,256}$</code>.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
