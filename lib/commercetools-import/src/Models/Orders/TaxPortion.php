<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\TypedMoney;

interface TaxPortion extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_RATE = 'rate';
    public const FIELD_AMOUNT = 'amount';

    /**

     * @return null|string
     */
    public function getName();

    /**

     * @return null|float
     */
    public function getRate();

    /**

     * @return null|TypedMoney
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
     * @param ?TypedMoney $amount
     */
    public function setAmount(?TypedMoney $amount): void;
}
