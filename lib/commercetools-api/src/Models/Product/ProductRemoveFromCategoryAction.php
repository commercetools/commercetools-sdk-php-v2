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

interface ProductRemoveFromCategoryAction extends ProductUpdateAction
{
    public const FIELD_CATEGORY = 'category';
    public const FIELD_STAGED = 'staged';

    /**
     * @return null|CategoryResourceIdentifier
     */
    public function getCategory();

    /**
     * @return null|bool
     */
    public function getStaged();

    public function setCategory(?CategoryResourceIdentifier $category): void;

    public function setStaged(?bool $staged): void;
}
