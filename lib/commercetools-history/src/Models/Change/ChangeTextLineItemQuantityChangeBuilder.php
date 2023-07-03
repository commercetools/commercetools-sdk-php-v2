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
 * @implements Builder<ChangeTextLineItemQuantityChange>
 */
final class ChangeTextLineItemQuantityChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?int
     */
    private $previousValue;

    /**

     * @var ?int
     */
    private $nextValue;

    /**

     * @var null|TextLineItemValue|TextLineItemValueBuilder
     */
    private $textLineItem;

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

     * @return null|int
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|int
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * <p>Holds information about the updated Text Line Item.</p>
     *

     * @return null|TextLineItemValue
     */
    public function getTextLineItem()
    {
        return $this->textLineItem instanceof TextLineItemValueBuilder ? $this->textLineItem->build() : $this->textLineItem;
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
     * @param ?int $previousValue
     * @return $this
     */
    public function withPreviousValue(?int $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?int $nextValue
     * @return $this
     */
    public function withNextValue(?int $nextValue)
    {
        $this->nextValue = $nextValue;

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
     * @deprecated use withTextLineItem() instead
     * @return $this
     */
    public function withTextLineItemBuilder(?TextLineItemValueBuilder $textLineItem)
    {
        $this->textLineItem = $textLineItem;

        return $this;
    }

    public function build(): ChangeTextLineItemQuantityChange
    {
        return new ChangeTextLineItemQuantityChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue,
            $this->textLineItem instanceof TextLineItemValueBuilder ? $this->textLineItem->build() : $this->textLineItem
        );
    }

    public static function of(): ChangeTextLineItemQuantityChangeBuilder
    {
        return new self();
    }
}
