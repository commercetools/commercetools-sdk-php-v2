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
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
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
