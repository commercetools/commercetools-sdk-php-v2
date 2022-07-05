<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

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

    /**
     * @param ?string $categoryId
     */
    public function setCategoryId(?string $categoryId): void;

    /**
     * @param ?string $orderHint
     */
    public function setOrderHint(?string $orderHint): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
