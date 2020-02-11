<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Category\Category;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CategoryCreatedMessage extends Message
{
    public const FIELD_CATEGORY = 'category';

    /**
     * @return null|Category
     */
    public function getCategory();

    public function setCategory(?Category $category): void;
}
