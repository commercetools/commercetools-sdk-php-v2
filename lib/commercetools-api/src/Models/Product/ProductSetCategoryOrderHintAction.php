<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductSetCategoryOrderHintAction extends ProductUpdateAction
{

    public const FIELD_CATEGORY_ID = 'categoryId';
    public const FIELD_ORDER_HINT = 'orderHint';
    public const FIELD_STAGED = 'staged';

    /**
     * @return null|string
     */
    public function getCategoryId();

    /**
     * @return null|string
     */
    public function getOrderHint();

    /**
     * @return null|bool
     */
    public function getStaged();

    public function setCategoryId(?string $categoryId): void;

    public function setOrderHint(?string $orderHint): void;

    public function setStaged(?bool $staged): void;
}
