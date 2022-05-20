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
     * <p>Number of fraction digits for a specified high precision money. It must be greater than the default number of fraction digits for the specified currency.</p>
     *
     * @return null|int
     */
    public function getFractionDigits();

    /**
     * <p>Amount in 1 / (10 ^ <code>fractionDigits</code>) of a currency.</p>
     *
     * @return null|int
     */
    public function getPreciseAmount();

    /**
     * <p>Amount in the smallest indivisible unit of a currency. This field is optional for high precision. If provided, it is checked for validity. Example:</p>
     * <p>A Price of 1.015 USD can be rounded either to 1.01 USD or 1.02 USD. If it lies outside of this range, an error message stating that centAmount must be rounded correctly will be returned.</p>
     * <p>If <code>centAmount</code> is not provided, the commercetools Platform calculates the value automatically using the default rounding mode half even.</p>
     *
     * @return null|int
     */
    public function getCentAmount();

    /**
     * @param ?int $fractionDigits
     */
    public function setFractionDigits(?int $fractionDigits): void;

    /**
     * @param ?int $preciseAmount
     */
    public function setPreciseAmount(?int $preciseAmount): void;

    /**
     * @param ?int $centAmount
     */
    public function setCentAmount(?int $centAmount): void;
}
