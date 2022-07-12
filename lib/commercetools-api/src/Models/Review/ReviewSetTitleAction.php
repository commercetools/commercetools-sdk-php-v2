<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ReviewSetTitleAction extends ReviewUpdateAction
{
    public const FIELD_TITLE = 'title';

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getTitle();

    /**
     * @param ?string $title
     */
    public function setTitle(?string $title): void;
}
