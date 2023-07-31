<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TypedMoneyDraft extends Money
{
    public const DISCRIMINATOR_FIELD = 'type';
    public const FIELD_TYPE = 'type';
    public const FIELD_FRACTION_DIGITS = 'fractionDigits';

    /**
     * <p>Determines the type of money used.</p>
     *

     * @return null|string
     */
    public function getType();

    /**
     * <p>Number of fraction digits for a specified money.</p>
     *

     * @return null|int
     */
    public function getFractionDigits();

    /**
     * <p>Amount in the smallest indivisible unit of a currency.</p>
     *

     * @return null|int
     */
    public function getCentAmount();

    /**
     * @param ?int $fractionDigits
     */
    public function setFractionDigits(?int $fractionDigits): void;

    /**
     * @param ?int $centAmount
     */
    public function setCentAmount(?int $centAmount): void;
}
