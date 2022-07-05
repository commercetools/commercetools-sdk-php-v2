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

/**
 * @implements Builder<SetTextLineItemCustomFieldChange>
 */
final class SetTextLineItemCustomFieldChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?string
     */
    private $customTypeId;

    /**

     * @var null|TextLineItemValue|TextLineItemValueBuilder
     */
    private $textLineItem;

    /**

     * @var null|mixed|mixed
     */
    private $nextValue;

    /**

     * @var null|mixed|mixed
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setTextLineItemCustomField</code></p>
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
    public function getName()
    {
        return $this->name;
    }

    /**

     * @return null|string
     */
    public function getCustomTypeId()
    {
        return $this->customTypeId;
    }

    /**

     * @return null|TextLineItemValue
     */
    public function getTextLineItem()
    {
        return $this->textLineItem instanceof TextLineItemValueBuilder ? $this->textLineItem->build() : $this->textLineItem;
    }

    /**

     * @return null|mixed
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**

     * @return null|mixed
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
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
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?string $customTypeId
     * @return $this
     */
    public function withCustomTypeId(?string $customTypeId)
    {
        $this->customTypeId = $customTypeId;

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
     * @param mixed $nextValue
     * @return $this
     */
    public function withNextValue( $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param mixed $previousValue
     * @return $this
     */
    public function withPreviousValue( $previousValue)
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

    public function build(): SetTextLineItemCustomFieldChange
    {
        return new SetTextLineItemCustomFieldChangeModel(
            $this->change,
            $this->name,
            $this->customTypeId,
            $this->textLineItem instanceof TextLineItemValueBuilder ? $this->textLineItem->build() : $this->textLineItem,
            $this->nextValue,
            $this->previousValue
        );
    }

    public static function of(): SetTextLineItemCustomFieldChangeBuilder
    {
        return new self();
    }
}
