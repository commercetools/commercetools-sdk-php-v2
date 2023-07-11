<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StagedOrderSetPurchaseOrderNumberAction>
 */
final class StagedOrderSetPurchaseOrderNumberActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $purchaseOrderNumber;

    /**
     * <p>Value to set.</p>
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


    public function build(): StagedOrderSetPurchaseOrderNumberAction
    {
        return new StagedOrderSetPurchaseOrderNumberActionModel(
            $this->purchaseOrderNumber
        );
    }

    public static function of(): StagedOrderSetPurchaseOrderNumberActionBuilder
    {
        return new self();
    }
}
