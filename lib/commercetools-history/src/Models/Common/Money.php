<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface Money extends JsonObject
{

    public const FIELD_CURRENCY_CODE = 'currencyCode';
    public const FIELD_CENT_AMOUNT = 'centAmount';
    public const FIELD_FRACTION_DIGITS = 'fractionDigits';
    public const FIELD_TYPE = 'type';

    /**
     * <p>Currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
     *

     * @return null|string
     */
    public function getCurrencyCode();

    /**

     * @return null|int
     */
    public function getCentAmount();

    /**

     * @return null|int
     */
    public function getFractionDigits();

    /**

     * @return null|string
     */
    public function getType();

    /**
     * @param ?string $currencyCode
     */
    public function setCurrencyCode(?string $currencyCode): void;

    /**
     * @param ?int $centAmount
     */
    public function setCentAmount(?int $centAmount): void;

    /**
     * @param ?int $fractionDigits
     */
    public function setFractionDigits(?int $fractionDigits): void;

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void;
}
