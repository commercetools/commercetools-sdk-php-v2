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

interface CategorySetMetaKeywordsAction extends CategoryUpdateAction
{
    public const FIELD_META_KEYWORDS = 'metaKeywords';

    /**
     * <p>Value to set.</p>
     *
     * @return null|LocalizedString
     */
    public function getMetaKeywords();

    /**
     * @param ?LocalizedString $metaKeywords
     */
    public function setMetaKeywords(?LocalizedString $metaKeywords): void;
}
