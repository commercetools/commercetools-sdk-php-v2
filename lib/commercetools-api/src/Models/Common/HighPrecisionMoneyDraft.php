<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface HighPrecisionMoneyDraft extends TypedMoneyDraft
{
    public const FIELD_PRECISE_AMOUNT = 'preciseAmount';

    /**
     * <p>amount in 1 / (10 ^ <code>fractionDigits</code>) of a currency.</p>
     *
     * @return null|int
     */
    public function getPreciseAmount();

    /**
     * @return null|int
     */
    public function getCentAmount();

    /**
     * @param ?int $preciseAmount
     */
    public function setPreciseAmount(?int $preciseAmount): void;

    /**
     * @param ?int $centAmount
     */
    public function setCentAmount(?int $centAmount): void;
}
