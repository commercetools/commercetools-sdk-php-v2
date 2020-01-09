<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

interface ReviewSetTitleAction extends ReviewUpdateAction
{
    const FIELD_TITLE = 'title';

    /**
     * <p>If <code>title</code> is absent or <code>null</code>, this field will be removed if it exists.</p>
     *
     * @return null|string
     */
    public function getTitle();

    public function setTitle(?string $title): void;
}
