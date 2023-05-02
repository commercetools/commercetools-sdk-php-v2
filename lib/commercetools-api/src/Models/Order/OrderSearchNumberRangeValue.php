<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSearchNumberRangeValue extends OrderSearchQueryExpressionValue
{
    public const FIELD_GTE = 'gte';
    public const FIELD_LTE = 'lte';

    /**

     * @return null|float
     */
    public function getGte();

    /**

     * @return null|float
     */
    public function getLte();

    /**
     * @param ?float $gte
     */
    public function setGte(?float $gte): void;

    /**
     * @param ?float $lte
     */
    public function setLte(?float $lte): void;
}
