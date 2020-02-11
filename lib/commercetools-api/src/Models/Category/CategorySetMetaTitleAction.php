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

interface CategorySetMetaTitleAction extends CategoryUpdateAction
{

    public const FIELD_META_TITLE = 'metaTitle';

    /**
     * @return null|LocalizedString
     */
    public function getMetaTitle();

    public function setMetaTitle(?LocalizedString $metaTitle): void;
}
