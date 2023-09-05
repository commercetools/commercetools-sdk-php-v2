<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartDiscountChangeIsActiveAction>
 */
final class CartDiscountChangeIsActiveActionBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $isActive;

    /**
     * <p>New value to set.
     * If set to <code>true</code>, the Discount will be applied to the Cart.</p>
     * <p>If the limit for active Cart Discounts is reached, a <a href="ctp:api:type:MaxCartDiscountsReachedError">MaxCartDiscountsReached</a> error is returned.</p>
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


    public function build(): CartDiscountChangeIsActiveAction
    {
        return new CartDiscountChangeIsActiveActionModel(
            $this->isActive
        );
    }

    public static function of(): CartDiscountChangeIsActiveActionBuilder
    {
        return new self();
    }
}
