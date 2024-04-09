<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchQueryExpressionValue extends JsonObject
{
    public const FIELD_FIELD = 'field';
    public const FIELD_BOOST = 'boost';
    public const FIELD_FIELD_TYPE = 'fieldType';

    /**

     * @return null|string
     */
    public function getField();

    /**

     * @return null|float
     */
    public function getBoost();

    /**
     * <p>Possible values for the <code>fieldType</code> property on <a href="/../api/search-query-language#query-expressions">query expressions</a> indicating the data type of the <code>field</code>.</p>
     *

     * @return null|string
     */
    public function getFieldType();

    /**
     * @param ?string $field
     */
    public function setField(?string $field): void;

    /**
     * @param ?float $boost
     */
    public function setBoost(?float $boost): void;

    /**
     * @param ?string $fieldType
     */
    public function setFieldType(?string $fieldType): void;
}
