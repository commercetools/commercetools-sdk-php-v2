<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyShoppingListRemoveTextLineItemAction>
 */
final class MyShoppingListRemoveTextLineItemActionBuilder implements Builder
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


    public function build(): MyShoppingListRemoveTextLineItemAction
    {
        return new MyShoppingListRemoveTextLineItemActionModel(
            $this->textLineItemId,
            $this->quantity
        );
    }

    public static function of(): MyShoppingListRemoveTextLineItemActionBuilder
    {
        return new self();
    }
}
