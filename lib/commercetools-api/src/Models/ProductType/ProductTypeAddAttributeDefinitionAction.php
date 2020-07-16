<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTypeAddAttributeDefinitionAction extends ProductTypeUpdateAction
{
    public const FIELD_ATTRIBUTE = 'attribute';

    /**
     * @return null|AttributeDefinitionDraft
     */
    public function getAttribute();

    /**
     * @param ?AttributeDefinitionDraft $attribute
     */
    public function setAttribute(?AttributeDefinitionDraft $attribute): void;
}
