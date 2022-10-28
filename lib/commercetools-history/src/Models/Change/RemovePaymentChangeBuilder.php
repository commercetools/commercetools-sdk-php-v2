<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\PaymentInfo;
use Commercetools\History\Models\Common\PaymentInfoBuilder;

/**
 * @implements Builder<RemovePaymentChange>
 */
final class RemovePaymentChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|PaymentInfo|PaymentInfoBuilder
     */
    private $nextValue;

    /**

     * @var null|PaymentInfo|PaymentInfoBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>addPayment</code> &amp; <code>removePayment</code></p>
     *

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**

     * @return null|PaymentInfo
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof PaymentInfoBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**

     * @return null|PaymentInfo
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof PaymentInfoBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?PaymentInfo $nextValue
     * @return $this
     */
    public function withNextValue(?PaymentInfo $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?PaymentInfo $previousValue
     * @return $this
     */
    public function withPreviousValue(?PaymentInfo $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?PaymentInfoBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?PaymentInfoBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): RemovePaymentChange
    {
        return new RemovePaymentChangeModel(
            $this->change,
            $this->nextValue instanceof PaymentInfoBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof PaymentInfoBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): RemovePaymentChangeBuilder
    {
        return new self();
    }
}
