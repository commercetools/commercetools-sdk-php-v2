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
 * @implements Builder<AddShoppingListLineItemAction>
 */
final class AddShoppingListLineItemActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|LineItem|LineItemBuilder
     */
    private $previousValue;

    /**
     * @var null|LineItem|LineItemBuilder
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
     * @return null|LineItem
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof LineItemBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * @return null|LineItem
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof LineItemBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?LineItem $previousValue
     * @return $this
     */
    public function withPreviousValue(?LineItem $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?LineItem $nextValue
     * @return $this
     */
    public function withNextValue(?LineItem $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?LineItemBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?LineItemBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): AddShoppingListLineItemAction
    {
        return new AddShoppingListLineItemActionModel(
            $this->change,
            $this->previousValue instanceof LineItemBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof LineItemBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): AddShoppingListLineItemActionBuilder
    {
        return new self();
    }
}
