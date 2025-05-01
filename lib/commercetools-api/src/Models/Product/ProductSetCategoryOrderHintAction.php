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
     * <p>The <code>id</code> of the Category to add the <code>orderHint</code>. If this Category is not assigned to the Product, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned.</p>
     *

     * @return null|string
     */
    public function getCategoryId();

    /**
     * <p>A string representing a number between 0 and 1. Must start with <code>0.</code> and cannot end with <code>0</code>. If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getOrderHint();

    /**
     * <p>If <code>true</code>, only the staged <code>categoryOrderHints</code> is updated. If <code>false</code>, both the current and staged <code>categoryOrderHints</code> are updated.</p>
     *

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
