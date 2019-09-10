<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

interface ProductSetCategoryOrderHintAction extends ProductUpdateAction
{
    const FIELD_CATEGORY_ID = 'categoryId';
    const FIELD_ORDER_HINT = 'orderHint';
    const FIELD_STAGED = 'staged';

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
