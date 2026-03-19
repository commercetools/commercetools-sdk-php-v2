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
 * @implements Builder<CartPurchaseOrderNumberSetMessagePayload>
 */
final class CartPurchaseOrderNumberSetMessagePayloadBuilder implements Builder
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
     * <p>Purchase order number on the <a href="ctp:api:type:Cart">Cart</a> after the <a href="ctp:api:type:CartSetPurchaseOrderNumberAction">Set Purchase Order Number</a> update action.</p>
     *

     * @return null|string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->purchaseOrderNumber;
    }

    /**
     * <p>Purchase order number on the <a href="ctp:api:type:Cart">Cart</a> before the <a href="ctp:api:type:CartSetPurchaseOrderNumberAction">Set Purchase Order Number</a> update action.</p>
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


    public function build(): CartPurchaseOrderNumberSetMessagePayload
    {
        return new CartPurchaseOrderNumberSetMessagePayloadModel(
            $this->purchaseOrderNumber,
            $this->oldPurchaseOrderNumber
        );
    }

    public static function of(): CartPurchaseOrderNumberSetMessagePayloadBuilder
    {
        return new self();
    }
}
