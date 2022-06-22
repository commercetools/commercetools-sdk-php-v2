<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTypeChangeAttributeOrderByNameAction extends ProductTypeUpdateAction
{
    public const FIELD_ATTRIBUTE_NAMES = 'attributeNames';

    /**
     * <p>Names of Attributes to reorder. This array must include all Attributes currently present on a ProductType in a different order.</p>
     *
     * @return null|array
     */
    public function getAttributeNames();

    /**
     * @param ?array $attributeNames
     */
    public function setAttributeNames(?array $attributeNames): void;
}
