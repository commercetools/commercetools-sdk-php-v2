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

interface CategorySetMetaDescriptionAction extends CategoryUpdateAction
{
    public const FIELD_META_DESCRIPTION = 'metaDescription';

    /**
     * @return null|LocalizedString
     */
    public function getMetaDescription();

    public function setMetaDescription(?LocalizedString $metaDescription): void;
}
