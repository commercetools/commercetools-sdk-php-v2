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
    private $previousValue;

    /**

     * @var null|PaymentInfo|PaymentInfoBuilder
     */
    private $nextValue;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|PaymentInfo
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof PaymentInfoBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|PaymentInfo
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof PaymentInfoBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?PaymentInfo $previousValue
     * @return $this
     */
    public function withPreviousValue(?PaymentInfo $previousValue)
    {
        $this->previousValue = $previousValue;

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
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?PaymentInfoBuilder $previousValue)
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

    public function build(): RemovePaymentChange
    {
        return new RemovePaymentChangeModel(
            $this->change,
            $this->previousValue instanceof PaymentInfoBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof PaymentInfoBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): RemovePaymentChangeBuilder
    {
        return new self();
    }
}
