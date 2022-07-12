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
 * @implements Builder<MyShoppingListChangeTextLineItemsOrderAction>
 */
final class MyShoppingListChangeTextLineItemsOrderActionBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $textLineItemOrder;

    /**

     * @return null|array
     */
    public function getTextLineItemOrder()
    {
        return $this->textLineItemOrder;
    }

    /**
     * @param ?array $textLineItemOrder
     * @return $this
     */
    public function withTextLineItemOrder(?array $textLineItemOrder)
    {
        $this->textLineItemOrder = $textLineItemOrder;

        return $this;
    }


    public function build(): MyShoppingListChangeTextLineItemsOrderAction
    {
        return new MyShoppingListChangeTextLineItemsOrderActionModel(
            $this->textLineItemOrder
        );
    }

    public static function of(): MyShoppingListChangeTextLineItemsOrderActionBuilder
    {
        return new self();
    }
}
