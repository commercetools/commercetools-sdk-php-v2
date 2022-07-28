<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Category\CategoryResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductAddToCategoryAction extends ProductUpdateAction
{
    public const FIELD_CATEGORY = 'category';
    public const FIELD_ORDER_HINT = 'orderHint';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>The Category to add.</p>
     *

     * @return null|CategoryResourceIdentifier
     */
    public function getCategory();

    /**
     * <p>A string representing a number between 0 and 1. Must start with <code>0.</code> and cannot end with <code>0</code>. If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getOrderHint();

    /**
     * <p>If <code>true</code>, only the staged <code>categories</code> and <code>categoryOrderHints</code> are updated. If <code>false</code>, both the current and staged <code>categories</code> and <code>categoryOrderHints</code> are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?CategoryResourceIdentifier $category
     */
    public function setCategory(?CategoryResourceIdentifier $category): void;

    /**
     * @param ?string $orderHint
     */
    public function setOrderHint(?string $orderHint): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
