<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchQueryExpressionValue extends JsonObject
{
    public const FIELD_FIELD = 'field';
    public const FIELD_BOOST = 'boost';
    public const FIELD_ATTRIBUTE_TYPE = 'attributeType';

    /**

     * @return null|string
     */
    public function getField();

    /**

     * @return null|float
     */
    public function getBoost();

    /**

     * @return null|string
     */
    public function getAttributeType();

    /**
     * @param ?string $field
     */
    public function setField(?string $field): void;

    /**
     * @param ?float $boost
     */
    public function setBoost(?float $boost): void;

    /**
     * @param ?string $attributeType
     */
    public function setAttributeType(?string $attributeType): void;
}
