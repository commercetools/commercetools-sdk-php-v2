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

     * @return null|CategoryResourceIdentifier
     */
    public function getCategory();

    /**

     * @return null|string
     */
    public function getOrderHint();

    /**

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
