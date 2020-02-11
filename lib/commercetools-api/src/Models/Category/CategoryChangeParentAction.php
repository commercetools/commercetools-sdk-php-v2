<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface CategoryChangeParentAction extends CategoryUpdateAction
{

    public const FIELD_PARENT = 'parent';

    /**
     * @return null|CategoryResourceIdentifier
     */
    public function getParent();

    public function setParent(?CategoryResourceIdentifier $parent): void;
}
