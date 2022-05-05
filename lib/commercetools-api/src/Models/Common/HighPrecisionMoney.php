<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface HighPrecisionMoney extends TypedMoney
{
    public const FIELD_PRECISE_AMOUNT = 'preciseAmount';

    /**
     * <p>Amount in 1 / (10 ^ <code>fractionDigits</code>) of a currency.</p>
     *
     * @return null|int
     */
    public function getPreciseAmount();

    /**
     * <p>Number of digits after the decimal separator, greater than the default number of fraction digits for a currency.</p>
     *
     * @return null|int
     */
    public function getFractionDigits();

    /**
     * @param ?int $preciseAmount
     */
    public function setPreciseAmount(?int $preciseAmount): void;

    /**
     * @param ?int $fractionDigits
     */
    public function setFractionDigits(?int $fractionDigits): void;
}
