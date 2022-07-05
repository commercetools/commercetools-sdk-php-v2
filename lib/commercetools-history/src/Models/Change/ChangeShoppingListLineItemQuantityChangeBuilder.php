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
use Commercetools\History\Models\ChangeValue\ShoppingListLineItemValue;
use Commercetools\History\Models\ChangeValue\ShoppingListLineItemValueBuilder;

/**
 * @implements Builder<ChangeShoppingListLineItemQuantityChange>
 */
final class ChangeShoppingListLineItemQuantityChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|ShoppingListLineItemValue|ShoppingListLineItemValueBuilder
     */
    private $lineItem;

    /**

     * @var ?int
     */
    private $previousValue;

    /**

     * @var ?int
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

     * @return null|ShoppingListLineItemValue
     */
    public function getLineItem()
    {
        return $this->lineItem instanceof ShoppingListLineItemValueBuilder ? $this->lineItem->build() : $this->lineItem;
    }

    /**

     * @return null|int
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**

     * @return null|int
     */
    public function getNextValue()
    {
        return $this->nextValue;
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
     * @param ?ShoppingListLineItemValue $lineItem
     * @return $this
     */
    public function withLineItem(?ShoppingListLineItemValue $lineItem)
    {
        $this->lineItem = $lineItem;

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
     * @deprecated use withLineItem() instead
     * @return $this
     */
    public function withLineItemBuilder(?ShoppingListLineItemValueBuilder $lineItem)
    {
        $this->lineItem = $lineItem;

        return $this;
    }

    public function build(): ChangeShoppingListLineItemQuantityChange
    {
        return new ChangeShoppingListLineItemQuantityChangeModel(
            $this->change,
            $this->lineItem instanceof ShoppingListLineItemValueBuilder ? $this->lineItem->build() : $this->lineItem,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): ChangeShoppingListLineItemQuantityChangeBuilder
    {
        return new self();
    }
}
