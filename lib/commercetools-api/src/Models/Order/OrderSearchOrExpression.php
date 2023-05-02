<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSearchOrExpression extends OrderSearchCompoundExpression
{
    public const FIELD_OR = 'or';

    /**

     * @return null|OrderSearchQueryCollection
     */
    public function getOr();

    /**
     * @param ?OrderSearchQueryCollection $or
     */
    public function setOr(?OrderSearchQueryCollection $or): void;
}
