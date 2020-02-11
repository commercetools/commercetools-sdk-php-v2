<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductSetKeyAction extends ProductUpdateAction
{

    public const FIELD_KEY = 'key';

    /**
     * <p>User-specific unique identifier for the product.
     * If left blank or set to <code>null</code>, the product key is unset/removed.</p>
     *
     * @return null|string
     */
    public function getKey();

    public function setKey(?string $key): void;
}
