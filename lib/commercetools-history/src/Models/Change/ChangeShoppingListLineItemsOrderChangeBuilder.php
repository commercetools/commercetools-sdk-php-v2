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
use Commercetools\History\Models\ChangeValue\ShoppingListLineItemValueCollection;

/**
 * @implements Builder<ChangeShoppingListLineItemsOrderChange>
 */
final class ChangeShoppingListLineItemsOrderChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var ?ShoppingListLineItemValueCollection
     */
    private $previousValue;

    /**
     * @var ?ShoppingListLineItemValueCollection
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
     * @return null|ShoppingListLineItemValueCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * @return null|ShoppingListLineItemValueCollection
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
     * @param ?ShoppingListLineItemValueCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?ShoppingListLineItemValueCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?ShoppingListLineItemValueCollection $nextValue
     * @return $this
     */
    public function withNextValue(?ShoppingListLineItemValueCollection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }


    public function build(): ChangeShoppingListLineItemsOrderChange
    {
        return new ChangeShoppingListLineItemsOrderChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): ChangeShoppingListLineItemsOrderChangeBuilder
    {
        return new self();
    }
}
