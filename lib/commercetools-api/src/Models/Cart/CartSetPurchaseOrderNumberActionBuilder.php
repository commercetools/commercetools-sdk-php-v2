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
 * @implements Builder<CartSetPurchaseOrderNumberAction>
 */
final class CartSetPurchaseOrderNumberActionBuilder implements Builder
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


    public function build(): CartSetPurchaseOrderNumberAction
    {
        return new CartSetPurchaseOrderNumberActionModel(
            $this->purchaseOrderNumber
        );
    }

    public static function of(): CartSetPurchaseOrderNumberActionBuilder
    {
        return new self();
    }
}
