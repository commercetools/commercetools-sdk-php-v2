<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartChangeLineItemsOrderAction>
 */
final class CartChangeLineItemsOrderActionBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $lineItemOrder;

    /**
     * <p>All existing <a href="ctp:api:type:LineItem">LineItem</a> <code>id</code>s in the desired new order.</p>
     *

     * @return null|array
     */
    public function getLineItemOrder()
    {
        return $this->lineItemOrder;
    }

    /**
     * @param ?array $lineItemOrder
     * @return $this
     */
    public function withLineItemOrder(?array $lineItemOrder)
    {
        $this->lineItemOrder = $lineItemOrder;

        return $this;
    }


    public function build(): CartChangeLineItemsOrderAction
    {
        return new CartChangeLineItemsOrderActionModel(
            $this->lineItemOrder
        );
    }

    public static function of(): CartChangeLineItemsOrderActionBuilder
    {
        return new self();
    }
}
