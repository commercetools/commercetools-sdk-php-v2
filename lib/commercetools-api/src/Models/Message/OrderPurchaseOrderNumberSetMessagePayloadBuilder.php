<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderPurchaseOrderNumberSetMessagePayload>
 */
final class OrderPurchaseOrderNumberSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $purchaseOrderNumber;

    /**

     * @var ?string
     */
    private $oldPurchaseOrderNumber;

    /**
     * <p>Purchase order number on the <a href="ctp:api:type:Order">Order</a> after the <a href="/../api/projects/orders#set-purchase-order-number">Set PurchaseOrderNumber</a> update action.</p>
     *

     * @return null|string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->purchaseOrderNumber;
    }

    /**
     * <p>Purchase order number on the <a href="ctp:api:type:Order">Order</a> before the <a href="/../api/projects/orders#set-purchase-order-number">Set PurchaseOrderNumber</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldPurchaseOrderNumber()
    {
        return $this->oldPurchaseOrderNumber;
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

    /**
     * @param ?string $oldPurchaseOrderNumber
     * @return $this
     */
    public function withOldPurchaseOrderNumber(?string $oldPurchaseOrderNumber)
    {
        $this->oldPurchaseOrderNumber = $oldPurchaseOrderNumber;

        return $this;
    }


    public function build(): OrderPurchaseOrderNumberSetMessagePayload
    {
        return new OrderPurchaseOrderNumberSetMessagePayloadModel(
            $this->purchaseOrderNumber,
            $this->oldPurchaseOrderNumber
        );
    }

    public static function of(): OrderPurchaseOrderNumberSetMessagePayloadBuilder
    {
        return new self();
    }
}
