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
 * @implements Builder<SetTextLineItemCustomTypeChange>
 */
final class SetTextLineItemCustomTypeChangeBuilder implements Builder
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
     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $nextValue;

    /**
     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setTextLineItemCustomType</code></p>
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
     * @return null|CustomFields
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof CustomFieldsBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @return null|CustomFields
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof CustomFieldsBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?CustomFields $nextValue
     * @return $this
     */
    public function withNextValue(?CustomFields $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?CustomFields $previousValue
     * @return $this
     */
    public function withPreviousValue(?CustomFields $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTextLineItemBuilder(?TextLineItemValueBuilder $textLineItem)
    {
        $this->textLineItem = $textLineItem;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?CustomFieldsBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?CustomFieldsBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): SetTextLineItemCustomTypeChange
    {
        return new SetTextLineItemCustomTypeChangeModel(
            $this->change,
            $this->textLineItem instanceof TextLineItemValueBuilder ? $this->textLineItem->build() : $this->textLineItem,
            $this->nextValue instanceof CustomFieldsBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof CustomFieldsBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): SetTextLineItemCustomTypeChangeBuilder
    {
        return new self();
    }
}
