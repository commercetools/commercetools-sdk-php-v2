<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderSetPurchaseOrderNumberAction>
 */
final class OrderSetPurchaseOrderNumberActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $purchaseOrderNumber;

    /**
     * <p>Identifier for a purchase order, usually in a B2B context.
     * The Purchase Order Number is typically entered by the <a href="/quotes-overview#buyer">Buyer</a> and can also be used with <a href="/quotes-overview">Quotes</a>.</p>
     *

     * @return null|string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->purchaseOrderNumber;
    }

    /**
     * @param ?string $purchaseOrderNumber
     * @return $this
     */
    public function withPurchaseOrderNumber(?string $purchaseOrderNumber)
    {
        $this->purchaseOrderNumber = $purchaseOrderNumber;

        return $this;
    }


    public function build(): OrderSetPurchaseOrderNumberAction
    {
        return new OrderSetPurchaseOrderNumberActionModel(
            $this->purchaseOrderNumber
        );
    }

    public static function of(): OrderSetPurchaseOrderNumberActionBuilder
    {
        return new self();
    }
}
