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
use Commercetools\History\Models\Common\ShoppingListLineItem;
use Commercetools\History\Models\Common\ShoppingListLineItemBuilder;

/**
 * @implements Builder<RemoveShoppingListLineItemChange>
 */
final class RemoveShoppingListLineItemChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|ShoppingListLineItem|ShoppingListLineItemBuilder
     */
    private $previousValue;

    /**

     * @var null|ShoppingListLineItem|ShoppingListLineItemBuilder
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

     * @return null|ShoppingListLineItem
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ShoppingListLineItemBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ShoppingListLineItem
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ShoppingListLineItemBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?ShoppingListLineItem $previousValue
     * @return $this
     */
    public function withPreviousValue(?ShoppingListLineItem $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?ShoppingListLineItem $nextValue
     * @return $this
     */
    public function withNextValue(?ShoppingListLineItem $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?ShoppingListLineItemBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?ShoppingListLineItemBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): RemoveShoppingListLineItemChange
    {
        return new RemoveShoppingListLineItemChangeModel(
            $this->change,
            $this->previousValue instanceof ShoppingListLineItemBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof ShoppingListLineItemBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): RemoveShoppingListLineItemChangeBuilder
    {
        return new self();
    }
}
