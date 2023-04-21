<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSearchAndExpression extends OrderSearchCompoundExpression
{
    public const FIELD_AND = 'and';

    /**

     * @return null|OrderSearchQueryCollection
     */
    public function getAnd();

    /**
     * @param ?OrderSearchQueryCollection $and
     */
    public function setAnd(?OrderSearchQueryCollection $and): void;
}
