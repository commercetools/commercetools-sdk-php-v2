<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\CentPrecisionMoney;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TaxPortion extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_RATE = 'rate';
    public const FIELD_AMOUNT = 'amount';

    /**
     * <p>Name of the tax portion.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>A number in the range 0-1.</p>
     *

     * @return null|float
     */
    public function getRate();

    /**
     * <p>Money value of the tax portion.</p>
     *

     * @return null|CentPrecisionMoney
     */
    public function getAmount();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?float $rate
     */
    public function setRate(?float $rate): void;

    /**
     * @param ?CentPrecisionMoney $amount
     */
    public function setAmount(?CentPrecisionMoney $amount): void;
}
