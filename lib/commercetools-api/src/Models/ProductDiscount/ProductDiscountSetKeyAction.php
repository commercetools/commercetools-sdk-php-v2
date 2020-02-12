<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductDiscountSetKeyAction extends ProductDiscountUpdateAction
{
    public const FIELD_KEY = 'key';

    /**
     * <p>The key to set.
     * If you provide a <code>null</code> value or do not set this field at all, the existing <code>key</code> field is removed.</p>
     *
     * @return null|string
     */
    public function getKey();

    public function setKey(?string $key): void;
}
