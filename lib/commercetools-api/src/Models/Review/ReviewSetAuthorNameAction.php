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
     * <p>If <code>authorName</code> is absent or <code>null</code>, this field will be removed if it exists.</p>
     *

     * @return null|string
     */
    public function getAuthorName();

    /**
     * @param ?string $authorName
     */
    public function setAuthorName(?string $authorName): void;
}
