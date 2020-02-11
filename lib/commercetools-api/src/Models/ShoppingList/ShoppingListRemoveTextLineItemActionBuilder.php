<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ShoppingListRemoveTextLineItemAction>
 */
final class ShoppingListRemoveTextLineItemActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $textLineItemId;

    /**
     * @var ?int
     */
    private $quantity;

    /**
     * @return null|string
     */
    public function getTextLineItemId()
    {
        return $this->textLineItemId;
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return $this
     */
    public function withTextLineItemId(?string $textLineItemId)
    {
        $this->textLineItemId = $textLineItemId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }


    public function build(): ShoppingListRemoveTextLineItemAction
    {
        return new ShoppingListRemoveTextLineItemActionModel(
            $this->textLineItemId,
            $this->quantity
        );
    }

    public static function of(): ShoppingListRemoveTextLineItemActionBuilder
    {
        return new self();
    }
}
