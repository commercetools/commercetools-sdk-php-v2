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
     * <p>New value to set. Must be a decimal value between 0 and 1. When sorted in ascending order, Categories with a lower <code>orderHint</code> appear before those with a higher value (for example, <code>0.05</code> before <code>0.07</code>).</p>
     *

     * @return null|string
     */
    public function getOrderHint();

    /**
     * @param ?string $orderHint
     */
    public function setOrderHint(?string $orderHint): void;
}
