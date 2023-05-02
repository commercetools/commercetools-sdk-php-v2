<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSearchExactExpression extends OrderSearchQueryExpression
{
    public const FIELD_EXACT = 'exact';

    /**

     * @return null|OrderSearchAnyValue
     */
    public function getExact();

    /**
     * @param ?OrderSearchAnyValue $exact
     */
    public function setExact(?OrderSearchAnyValue $exact): void;
}
