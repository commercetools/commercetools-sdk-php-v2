<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface OrderSearchDateRangeValue extends OrderSearchQueryExpressionValue
{
    public const FIELD_GTE = 'gte';
    public const FIELD_LTE = 'lte';

    /**

     * @return null|DateTimeImmutable
     */
    public function getGte();

    /**

     * @return null|DateTimeImmutable
     */
    public function getLte();

    /**
     * @param ?DateTimeImmutable $gte
     */
    public function setGte(?DateTimeImmutable $gte): void;

    /**
     * @param ?DateTimeImmutable $lte
     */
    public function setLte(?DateTimeImmutable $lte): void;
}
