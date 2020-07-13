<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Category\CategoryReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductAddedToCategoryMessagePayload extends MessagePayload
{
    public const FIELD_CATEGORY = 'category';
    public const FIELD_STAGED = 'staged';

    /**
     * @return null|CategoryReference
     */
    public function getCategory();

    /**
     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?CategoryReference $category
     */
    public function setCategory(?CategoryReference $category): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
