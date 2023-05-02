<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSearchWildCardExpression extends OrderSearchQueryExpression
{
    public const FIELD_WILDCARD = 'wildcard';

    /**

     * @return null|OrderSearchStringValue
     */
    public function getWildcard();

    /**
     * @param ?OrderSearchStringValue $wildcard
     */
    public function setWildcard(?OrderSearchStringValue $wildcard): void;
}
