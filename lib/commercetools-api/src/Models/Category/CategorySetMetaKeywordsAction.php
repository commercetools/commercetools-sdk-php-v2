<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\LocalizedString;

interface CategorySetMetaKeywordsAction extends CategoryUpdateAction
{

    public const FIELD_META_KEYWORDS = 'metaKeywords';

    /**
     * @return null|LocalizedString
     */
    public function getMetaKeywords();

    public function setMetaKeywords(?LocalizedString $metaKeywords): void;
}
