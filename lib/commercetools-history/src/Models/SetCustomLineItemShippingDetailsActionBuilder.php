<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SetCustomLineItemShippingDetailsAction>
 */
final class SetCustomLineItemShippingDetailsActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var ?string
     */
    private $customLineItemId;

    /**
     * @var null|ItemShippingDetails|ItemShippingDetailsBuilder
     */
    private $nextValue;

    /**
     * @var null|ItemShippingDetails|ItemShippingDetailsBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setCustomLineItemShippingDetails</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|string
     */
    public function getCustomLineItemId()
    {
        return $this->customLineItemId;
    }

    /**
     * @return null|ItemShippingDetails
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ItemShippingDetailsBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @return null|ItemShippingDetails
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ItemShippingDetailsBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?string $customLineItemId
     * @return $this
     */
    public function withCustomLineItemId(?string $customLineItemId)
    {
        $this->customLineItemId = $customLineItemId;

        return $this;
    }

    /**
     * @param ?ItemShippingDetails $nextValue
     * @return $this
     */
    public function withNextValue(?ItemShippingDetails $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?ItemShippingDetails $previousValue
     * @return $this
     */
    public function withPreviousValue(?ItemShippingDetails $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?ItemShippingDetailsBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?ItemShippingDetailsBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): SetCustomLineItemShippingDetailsAction
    {
        return new SetCustomLineItemShippingDetailsActionModel(
            $this->change,
            $this->customLineItemId,
            $this->nextValue instanceof ItemShippingDetailsBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof ItemShippingDetailsBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): SetCustomLineItemShippingDetailsActionBuilder
    {
        return new self();
    }
}
