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
use Commercetools\History\Models\Common\LocalizedString;
use Commercetools\History\Models\Common\LocalizedStringBuilder;
use Commercetools\History\Models\Common\Reference;
use Commercetools\History\Models\Common\ReferenceBuilder;

/**
 * @implements Builder<SetLineItemDistributionChannelChange>
 */
final class SetLineItemDistributionChannelChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $previousValue;

    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $nextValue;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $lineItem;

    /**

     * @var ?string
     */
    private $variant;

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

     * @return null|Reference
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ReferenceBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|Reference
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ReferenceBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * <p>Name of the <a href="ctp:api:type:Product">Product</a> the Line Item is based on.</p>
     *

     * @return null|LocalizedString
     */
    public function getLineItem()
    {
        return $this->lineItem instanceof LocalizedStringBuilder ? $this->lineItem->build() : $this->lineItem;
    }

    /**
     * <p><code>sku</code> or <code>key</code> of the updated <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *

     * @return null|string
     */
    public function getVariant()
    {
        return $this->variant;
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
     * @param ?Reference $previousValue
     * @return $this
     */
    public function withPreviousValue(?Reference $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?Reference $nextValue
     * @return $this
     */
    public function withNextValue(?Reference $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?LocalizedString $lineItem
     * @return $this
     */
    public function withLineItem(?LocalizedString $lineItem)
    {
        $this->lineItem = $lineItem;

        return $this;
    }

    /**
     * @param ?string $variant
     * @return $this
     */
    public function withVariant(?string $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?ReferenceBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?ReferenceBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withLineItem() instead
     * @return $this
     */
    public function withLineItemBuilder(?LocalizedStringBuilder $lineItem)
    {
        $this->lineItem = $lineItem;

        return $this;
    }

    public function build(): SetLineItemDistributionChannelChange
    {
        return new SetLineItemDistributionChannelChangeModel(
            $this->change,
            $this->previousValue instanceof ReferenceBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof ReferenceBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->lineItem instanceof LocalizedStringBuilder ? $this->lineItem->build() : $this->lineItem,
            $this->variant
        );
    }

    public static function of(): SetLineItemDistributionChannelChangeBuilder
    {
        return new self();
    }
}
