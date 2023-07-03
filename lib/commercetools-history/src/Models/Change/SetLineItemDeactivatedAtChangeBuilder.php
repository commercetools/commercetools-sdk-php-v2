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

     * @var ?string
     */
    private $previousValue;

    /**

     * @var ?string
     */
    private $nextValue;

    /**

     * @var null|ShoppingListLineItemValue|ShoppingListLineItemValueBuilder
     */
    private $lineItem;

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

     * @return null|string
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|string
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * <p>Holds information about the updated Shopping List Line Item.</p>
     *

     * @return null|ShoppingListLineItemValue
     */
    public function getLineItem()
    {
        return $this->lineItem instanceof ShoppingListLineItemValueBuilder ? $this->lineItem->build() : $this->lineItem;
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
     * @param ?ShoppingListLineItemValue $lineItem
     * @return $this
     */
    public function withLineItem(?ShoppingListLineItemValue $lineItem)
    {
        $this->lineItem = $lineItem;

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
            $this->previousValue,
            $this->nextValue,
            $this->lineItem instanceof ShoppingListLineItemValueBuilder ? $this->lineItem->build() : $this->lineItem
        );
    }

    public static function of(): SetLineItemDeactivatedAtChangeBuilder
    {
        return new self();
    }
}
