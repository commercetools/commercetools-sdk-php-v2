<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductDiscountChangeIsActiveAction>
 */
final class ProductDiscountChangeIsActiveActionBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $isActive;

    /**
     * <p>New value to set.
     * If set to <code>true</code>, the Discount will be applied to Product Prices.</p>
     *

     * @return null|bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @param ?bool $isActive
     * @return $this
     */
    public function withIsActive(?bool $isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }


    public function build(): ProductDiscountChangeIsActiveAction
    {
        return new ProductDiscountChangeIsActiveActionModel(
            $this->isActive
        );
    }

    public static function of(): ProductDiscountChangeIsActiveActionBuilder
    {
        return new self();
    }
}
