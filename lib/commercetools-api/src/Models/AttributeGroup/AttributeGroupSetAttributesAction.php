<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AttributeGroup;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AttributeGroupSetAttributesAction extends AttributeGroupUpdateAction
{
    public const FIELD_ATTRIBUTES = 'attributes';

    /**
     * <p>New unique values to set.</p>
     *

     * @return null|AttributeReferenceCollection
     */
    public function getAttributes();

    /**
     * @param ?AttributeReferenceCollection $attributes
     */
    public function setAttributes(?AttributeReferenceCollection $attributes): void;
}
