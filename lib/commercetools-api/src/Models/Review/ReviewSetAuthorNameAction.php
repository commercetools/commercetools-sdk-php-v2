<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ReviewSetAuthorNameAction extends ReviewUpdateAction
{
    public const FIELD_AUTHOR_NAME = 'authorName';

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getAuthorName();

    /**
     * @param ?string $authorName
     */
    public function setAuthorName(?string $authorName): void;
}
