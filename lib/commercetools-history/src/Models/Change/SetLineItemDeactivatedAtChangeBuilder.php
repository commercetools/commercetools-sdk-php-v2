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
 * @implements Builder<SetLineItemDeactivatedAtChange>
 */
final class SetLineItemDeactivatedAtChangeBuilder implements Builder
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

     * @var ?string
     */
    private $previousValue;

    /**

     * @var ?string
     */
    private $nextValue;

    /**
     * <p>Update action for <code>setLineItemDeactivatedAt</code></p>
     *

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

     * @return null|string
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**

     * @return null|string
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
     * @param ?string $previousValue
     * @return $this
     */
    public function withPreviousValue(?string $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?string $nextValue
     * @return $this
     */
    public function withNextValue(?string $nextValue)
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

    public function build(): SetLineItemDeactivatedAtChange
    {
        return new SetLineItemDeactivatedAtChangeModel(
            $this->change,
            $this->lineItem instanceof ShoppingListLineItemValueBuilder ? $this->lineItem->build() : $this->lineItem,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): SetLineItemDeactivatedAtChangeBuilder
    {
        return new self();
    }
}
