<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTypeRemoveEnumValuesAction extends ProductTypeUpdateAction
{
    public const FIELD_ATTRIBUTE_NAME = 'attributeName';
    public const FIELD_KEYS = 'keys';

    /**
     * <p>Name of the AttributeDefinition to update.</p>
     *
     * @return null|string
     */
    public function getAttributeName();

    /**
     * <p>Keys of <a href="ctp:api:type:AttributeEnumType">AttributeEnumType</a> or <a href="ctp:api:type:AttributeLocalizedEnumType">AttributeLocalizedEnumType</a> to remove.</p>
     *
     * @return null|array
     */
    public function getKeys();

    /**
     * @param ?string $attributeName
     */
    public function setAttributeName(?string $attributeName): void;

    /**
     * @param ?array $keys
     */
    public function setKeys(?array $keys): void;
}
