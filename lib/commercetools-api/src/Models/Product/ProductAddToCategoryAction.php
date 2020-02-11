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

    public function setCategory(?CategoryResourceIdentifier $category): void;

    public function setOrderHint(?string $orderHint): void;

    public function setStaged(?bool $staged): void;
}
