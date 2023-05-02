<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSearchLongRangeValue extends OrderSearchQueryExpressionValue
{
    public const FIELD_GTE = 'gte';
    public const FIELD_LTE = 'lte';

    /**

     * @return null|int
     */
    public function getGte();

    /**

     * @return null|int
     */
    public function getLte();

    /**
     * @param ?int $gte
     */
    public function setGte(?int $gte): void;

    /**
     * @param ?int $lte
     */
    public function setLte(?int $lte): void;
}
