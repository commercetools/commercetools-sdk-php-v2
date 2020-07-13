<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CategoryChangeParentAction extends CategoryUpdateAction
{
    public const FIELD_PARENT = 'parent';

    /**
     * @return null|CategoryResourceIdentifier
     */
    public function getParent();

    /**
     * @param ?CategoryResourceIdentifier $parent
     */
    public function setParent(?CategoryResourceIdentifier $parent): void;
}
