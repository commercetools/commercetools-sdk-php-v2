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
 * @implements Builder<ShoppingListChangeLineItemQuantityAction>
 */
final class ShoppingListChangeLineItemQuantityActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $lineItemId;

    /**

     * @var ?int
     */
    private $quantity;

    /**

     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**

     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param ?string $lineItemId
     * @return $this
     */
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * @param ?int $quantity
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }


    public function build(): ShoppingListChangeLineItemQuantityAction
    {
        return new ShoppingListChangeLineItemQuantityActionModel(
            $this->lineItemId,
            $this->quantity
        );
    }

    public static function of(): ShoppingListChangeLineItemQuantityActionBuilder
    {
        return new self();
    }
}
