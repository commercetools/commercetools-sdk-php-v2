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
use Commercetools\History\Models\Common\DiscountedLineItemPriceForQuantity;
use Commercetools\History\Models\Common\DiscountedLineItemPriceForQuantityBuilder;
use Commercetools\History\Models\Common\LocalizedString;
use Commercetools\History\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<SetCustomLineItemDiscountedPricePerQuantityChange>
 */
final class SetCustomLineItemDiscountedPricePerQuantityChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $customLineItem;

    /**

     * @var ?string
     */
    private $customLineItemId;

    /**

     * @var null|DiscountedLineItemPriceForQuantity|DiscountedLineItemPriceForQuantityBuilder
     */
    private $previousValue;

    /**

     * @var null|DiscountedLineItemPriceForQuantity|DiscountedLineItemPriceForQuantityBuilder
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
     * <p>Name of the updated <a href="ctp:api:type:CustomLineItem">CustomLineItem</a>.</p>
     *

     * @return null|LocalizedString
     */
    public function getCustomLineItem()
    {
        return $this->customLineItem instanceof LocalizedStringBuilder ? $this->customLineItem->build() : $this->customLineItem;
    }

    /**
     * <p><code>id</code> of the updated <a href="ctp:api:type:CustomLineItem">CustomLineItem</a>.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemId()
    {
        return $this->customLineItemId;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|DiscountedLineItemPriceForQuantity
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof DiscountedLineItemPriceForQuantityBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|DiscountedLineItemPriceForQuantity
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof DiscountedLineItemPriceForQuantityBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?LocalizedString $customLineItem
     * @return $this
     */
    public function withCustomLineItem(?LocalizedString $customLineItem)
    {
        $this->customLineItem = $customLineItem;

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
     * @param ?DiscountedLineItemPriceForQuantity $previousValue
     * @return $this
     */
    public function withPreviousValue(?DiscountedLineItemPriceForQuantity $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?DiscountedLineItemPriceForQuantity $nextValue
     * @return $this
     */
    public function withNextValue(?DiscountedLineItemPriceForQuantity $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withCustomLineItem() instead
     * @return $this
     */
    public function withCustomLineItemBuilder(?LocalizedStringBuilder $customLineItem)
    {
        $this->customLineItem = $customLineItem;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?DiscountedLineItemPriceForQuantityBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?DiscountedLineItemPriceForQuantityBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): SetCustomLineItemDiscountedPricePerQuantityChange
    {
        return new SetCustomLineItemDiscountedPricePerQuantityChangeModel(
            $this->change,
            $this->customLineItem instanceof LocalizedStringBuilder ? $this->customLineItem->build() : $this->customLineItem,
            $this->customLineItemId,
            $this->previousValue instanceof DiscountedLineItemPriceForQuantityBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof DiscountedLineItemPriceForQuantityBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): SetCustomLineItemDiscountedPricePerQuantityChangeBuilder
    {
        return new self();
    }
}
