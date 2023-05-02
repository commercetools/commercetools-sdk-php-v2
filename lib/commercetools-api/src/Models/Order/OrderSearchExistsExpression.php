<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSearchExistsExpression extends OrderSearchQueryExpression
{
    public const FIELD_EXISTS = 'exists';

    /**

     * @return null|OrderSearchQueryExpressionValue
     */
    public function getExists();

    /**
     * @param ?OrderSearchQueryExpressionValue $exists
     */
    public function setExists(?OrderSearchQueryExpressionValue $exists): void;
}
