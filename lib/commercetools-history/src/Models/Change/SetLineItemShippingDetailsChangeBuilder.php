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
use Commercetools\History\Models\Common\ItemShippingDetails;
use Commercetools\History\Models\Common\ItemShippingDetailsBuilder;

/**
 * @implements Builder<SetLineItemShippingDetailsChange>
 */
final class SetLineItemShippingDetailsChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|ItemShippingDetails|ItemShippingDetailsBuilder
     */
    private $previousValue;

    /**

     * @var null|ItemShippingDetails|ItemShippingDetailsBuilder
     */
    private $nextValue;

    /**

     * @var ?string
     */
    private $lineItemId;

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

     * @return null|ItemShippingDetails
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ItemShippingDetailsBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ItemShippingDetails
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ItemShippingDetailsBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * <p><code>id</code> of the updated <a href="ctp:api:type:LineItem">LineItem</a>.</p>
     *

     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
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
     * @param ?ItemShippingDetails $previousValue
     * @return $this
     */
    public function withPreviousValue(?ItemShippingDetails $previousValue)
    {
        $this->previousValue = $previousValue;

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
     * @param ?string $lineItemId
     * @return $this
     */
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?ItemShippingDetailsBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?ItemShippingDetailsBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): SetLineItemShippingDetailsChange
    {
        return new SetLineItemShippingDetailsChangeModel(
            $this->change,
            $this->previousValue instanceof ItemShippingDetailsBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof ItemShippingDetailsBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->lineItemId
        );
    }

    public static function of(): SetLineItemShippingDetailsChangeBuilder
    {
        return new self();
    }
}
