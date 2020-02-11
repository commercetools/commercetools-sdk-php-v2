<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface Money extends JsonObject
{

    public const FIELD_CENT_AMOUNT = 'centAmount';
    public const FIELD_CURRENCY_CODE = 'currencyCode';

    /**
     * @return null|int
     */
    public function getCentAmount();

    /**
     * <p>The currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
     *
     * @return null|string
     */
    public function getCurrencyCode();

    public function setCentAmount(?int $centAmount): void;

    public function setCurrencyCode(?string $currencyCode): void;
}
