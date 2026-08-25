<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface EstimatedDelivery extends JsonObject
{
    public const FIELD_FROM = 'from';
    public const FIELD_UNTIL = 'until';

    /**
     * <p>Date and time (UTC) of the earliest expected delivery.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getFrom();

    /**
     * <p>Date and time (UTC) of the latest expected delivery.
     * When both <code>from</code> and <code>until</code> are set, <code>until</code> must be equal to or later than <code>from</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getUntil();

    /**
     * @param ?DateTimeImmutable $from
     */
    public function setFrom(?DateTimeImmutable $from): void;

    /**
     * @param ?DateTimeImmutable $until
     */
    public function setUntil(?DateTimeImmutable $until): void;
}
