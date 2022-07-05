<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CategorySetMetaTitleAction extends CategoryUpdateAction
{
    public const FIELD_META_TITLE = 'metaTitle';

    /**
     * <p>Value to set.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaTitle();

    /**
     * @param ?LocalizedString $metaTitle
     */
    public function setMetaTitle(?LocalizedString $metaTitle): void;
}
