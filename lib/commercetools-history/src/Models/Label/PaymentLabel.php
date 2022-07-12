<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\Money;

interface PaymentLabel extends Label
{

    public const FIELD_KEY = 'key';
    public const FIELD_AMOUNT_PLANNED = 'amountPlanned';

    /**

     * @return null|string
     */
    public function getType();

    /**

     * @return null|string
     */
    public function getKey();

    /**

     * @return null|Money
     */
    public function getAmountPlanned();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?Money $amountPlanned
     */
    public function setAmountPlanned(?Money $amountPlanned): void;
}
