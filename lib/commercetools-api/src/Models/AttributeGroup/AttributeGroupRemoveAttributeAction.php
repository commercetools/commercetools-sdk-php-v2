<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AttributeGroup;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AttributeGroupRemoveAttributeAction extends AttributeGroupUpdateAction
{
    public const FIELD_ATTRIBUTE = 'attribute';

    /**
     * <p>Value to remove.</p>
     *

     * @return null|AttributeReference
     */
    public function getAttribute();

    /**
     * @param ?AttributeReference $attribute
     */
    public function setAttribute(?AttributeReference $attribute): void;
}
