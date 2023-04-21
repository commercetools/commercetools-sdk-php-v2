<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSearchNotExpression extends OrderSearchCompoundExpression
{
    public const FIELD_NOT = 'not';

    /**

     * @return null|OrderSearchQueryCollection
     */
    public function getNot();

    /**
     * @param ?OrderSearchQueryCollection $not
     */
    public function setNot(?OrderSearchQueryCollection $not): void;
}
