<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\PaymentInfo;

interface RemovePaymentChange extends Change
{

    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>addPayment</code> &amp; <code>removePayment</code></p>
     *

     * @return null|string
     */
    public function getChange();

    /**

     * @return null|PaymentInfo
     */
    public function getNextValue();

    /**

     * @return null|PaymentInfo
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?PaymentInfo $nextValue
     */
    public function setNextValue(?PaymentInfo $nextValue): void;

    /**
     * @param ?PaymentInfo $previousValue
     */
    public function setPreviousValue(?PaymentInfo $previousValue): void;
}
