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
 * @implements Builder<BestDeal>
 */
final class BestDealBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $chosenDiscountType;

    /**
     * <p>Discount type that offers the best deal; the value can be <code>ProductDiscount</code> or <code>CartDiscount</code>.</p>
     * <p><a href="ctp:api:type:DirectDiscount">Direct Discounts</a> are indicated as <code>CartDiscount</code> when they offer the best deal.</p>
     *

     * @return null|string
     */
    public function getChosenDiscountType()
    {
        return $this->chosenDiscountType;
    }

    /**
     * @param ?string $chosenDiscountType
     * @return $this
     */
    public function withChosenDiscountType(?string $chosenDiscountType)
    {
        $this->chosenDiscountType = $chosenDiscountType;

        return $this;
    }


    public function build(): BestDeal
    {
        return new BestDealModel(
            $this->chosenDiscountType
        );
    }

    public static function of(): BestDealBuilder
    {
        return new self();
    }
}
