<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSearchQueryExpressionValue extends JsonObject
{
    public const FIELD_FIELD = 'field';
    public const FIELD_BOOST = 'boost';
    public const FIELD_CUSTOM_TYPE = 'customType';

    /**

     * @return null|string
     */
    public function getField();

    /**

     * @return null|int
     */
    public function getBoost();

    /**
     * <p>Possible values for the <code>customType</code> property on <a href="/../api/projects/order-search#query-expressions">query expressions</a> indicating the data type of the <code>field</code>.</p>
     *

     * @return null|string
     */
    public function getCustomType();

    /**
     * @param ?string $field
     */
    public function setField(?string $field): void;

    /**
     * @param ?int $boost
     */
    public function setBoost(?int $boost): void;

    /**
     * @param ?string $customType
     */
    public function setCustomType(?string $customType): void;
}
