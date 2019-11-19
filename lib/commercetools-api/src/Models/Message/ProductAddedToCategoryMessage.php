<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Category\CategoryReference;

interface ProductAddedToCategoryMessage extends Message
{
    const FIELD_CATEGORY = 'category';
    const FIELD_STAGED = 'staged';

    /**
     * @return null|CategoryReference
     */
    public function getCategory();

    /**
     * @return null|bool
     */
    public function getStaged();

    public function setCategory(?CategoryReference $category): void;

    public function setStaged(?bool $staged): void;
}
