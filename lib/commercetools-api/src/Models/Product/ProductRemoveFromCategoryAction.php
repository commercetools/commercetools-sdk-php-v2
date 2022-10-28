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
     * <p>The Category to remove.</p>
     *

     * @return null|CategoryResourceIdentifier
     */
    public function getCategory();

    /**
     * <p>If <code>true</code>, only the staged <code>categories</code> and <code>categoryOrderHints</code> are removed. If <code>false</code>, both the current and staged <code>categories</code> and <code>categoryOrderHints</code> are removed.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?CategoryResourceIdentifier $category
     */
    public function setCategory(?CategoryResourceIdentifier $category): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
