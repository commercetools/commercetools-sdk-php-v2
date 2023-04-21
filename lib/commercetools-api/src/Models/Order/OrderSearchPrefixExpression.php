<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSearchPrefixExpression extends OrderSearchQueryExpression
{
    public const FIELD_PREFIX = 'prefix';

    /**

     * @return null|OrderSearchStringValue
     */
    public function getPrefix();

    /**
     * @param ?OrderSearchStringValue $prefix
     */
    public function setPrefix(?OrderSearchStringValue $prefix): void;
}
