<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CategoryChangeOrderHintAction extends CategoryUpdateAction
{
    public const FIELD_ORDER_HINT = 'orderHint';

    /**
     * @return null|string
     */
    public function getOrderHint();

    /**
     * @param ?string $orderHint
     */
    public function setOrderHint(?string $orderHint): void;
}
