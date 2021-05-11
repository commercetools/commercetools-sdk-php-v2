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
use Commercetools\History\Models\ChangeValue\TextLineItemValue;
use Commercetools\History\Models\ChangeValue\TextLineItemValueBuilder;
use Commercetools\History\Models\Common\LocalizedString;
use Commercetools\History\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<ChangeTextLineItemNameChange>
 */
final class ChangeTextLineItemNameChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|TextLineItemValue|TextLineItemValueBuilder
     */
    private $textLineItem;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $nextValue;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>changeTextLineItemName</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|TextLineItemValue
     */
    public function getTextLineItem()
    {
        return $this->textLineItem instanceof TextLineItemValueBuilder ? $this->textLineItem->build() : $this->textLineItem;
    }

    /**
     * @return null|LocalizedString
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof LocalizedStringBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @return null|LocalizedString
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof LocalizedStringBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?TextLineItemValue $textLineItem
     * @return $this
     */
    public function withTextLineItem(?TextLineItemValue $textLineItem)
    {
        $this->textLineItem = $textLineItem;

        return $this;
    }

    /**
     * @param ?LocalizedString $nextValue
     * @return $this
     */
    public function withNextValue(?LocalizedString $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?LocalizedString $previousValue
     * @return $this
     */
    public function withPreviousValue(?LocalizedString $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withTextLineItem() instead
     * @return $this
     */
    public function withTextLineItemBuilder(?TextLineItemValueBuilder $textLineItem)
    {
        $this->textLineItem = $textLineItem;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?LocalizedStringBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?LocalizedStringBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): ChangeTextLineItemNameChange
    {
        return new ChangeTextLineItemNameChangeModel(
            $this->change,
            $this->textLineItem instanceof TextLineItemValueBuilder ? $this->textLineItem->build() : $this->textLineItem,
            $this->nextValue instanceof LocalizedStringBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof LocalizedStringBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): ChangeTextLineItemNameChangeBuilder
    {
        return new self();
    }
}
