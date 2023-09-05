<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TypedMoney extends Money
{
    public const DISCRIMINATOR_FIELD = 'type';
    public const FIELD_TYPE = 'type';
    public const FIELD_FRACTION_DIGITS = 'fractionDigits';

    /**
     * <p>Type of money used.</p>
     *

     * @return null|string
     */
    public function getType();

    /**
     * <p>Number of digits after the decimal separator.</p>
     * <ul>
     * <li>For <a href="ctp:api:type:CentPrecisionMoney">CentPrecisionMoney</a>, it is equal to the default number of fraction digits for a currency.</li>
     * <li>For <a href="ctp:api:type:HighPrecisionMoney">HighPrecisionMoney</a>, it is greater than the default number of fraction digits for a currency.</li>
     * </ul>
     *

     * @return null|int
     */
    public function getFractionDigits();

    /**
     * @param ?int $fractionDigits
     */
    public function setFractionDigits(?int $fractionDigits): void;
}
