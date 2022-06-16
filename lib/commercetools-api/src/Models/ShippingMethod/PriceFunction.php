<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PriceFunction extends JsonObject
{
    public const FIELD_CURRENCY_CODE = 'currencyCode';
    public const FIELD_FUNCTION = 'function';

    /**
     * <p>Currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
     *
     * @return null|string
     */
    public function getCurrencyCode();

    /**
     * <p>To calculate a Price based on the score, use <code>+</code>, <code>-</code>, <code>*</code> and parentheses. The score is inserted with <code>x</code>. The function returns the cent amount.</p>
     * <p>For example, to charge $1.99 for a score of <code>1</code>, $3.99 for a score of <code>2</code>, $5.99 for a score of <code>3</code> and onwards, the function is: <code>(200 * x) - 1)</code>. To charge $4.50, $6.00, and $7.50 for express shipping, the function is: <code>(150 * x) + 300</code>.</p>
     *
     * @return null|string
     */
    public function getFunction();

    /**
     * @param ?string $currencyCode
     */
    public function setCurrencyCode(?string $currencyCode): void;

    /**
     * @param ?string $function
     */
    public function setFunction(?string $function): void;
}
