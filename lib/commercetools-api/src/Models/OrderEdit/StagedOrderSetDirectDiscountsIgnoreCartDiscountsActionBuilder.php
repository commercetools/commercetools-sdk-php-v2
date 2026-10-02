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
 * @implements Builder<StagedOrderSetDirectDiscountsIgnoreCartDiscountsAction>
 */
final class StagedOrderSetDirectDiscountsIgnoreCartDiscountsActionBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $directDiscountsIgnoreCartDiscounts;

    /**
     * <ul>
     * <li>If <code>true</code>, only <a href="ctp:api:type:DirectDiscount">Direct Discounts</a> apply to the Order. Matching <a href="ctp:api:type:CartDiscount">Cart Discounts</a> are ignored, and Discount Codes cannot be added.</li>
     * </ul>
     * <p>The value can be set to <code>true</code> only if the Order does not have both <code>discountCodes</code> and <code>directDiscounts</code>.</p>
     * <ul>
     * <li>If <code>false</code>, Cart Discounts, Discount Codes, and Direct Discounts apply to the Order.</li>
     * </ul>
     *

     * @return null|bool
     */
    public function getDirectDiscountsIgnoreCartDiscounts()
    {
        return $this->directDiscountsIgnoreCartDiscounts;
    }

    /**
     * @param ?bool $directDiscountsIgnoreCartDiscounts
     * @return $this
     */
    public function withDirectDiscountsIgnoreCartDiscounts(?bool $directDiscountsIgnoreCartDiscounts)
    {
        $this->directDiscountsIgnoreCartDiscounts = $directDiscountsIgnoreCartDiscounts;

        return $this;
    }


    public function build(): StagedOrderSetDirectDiscountsIgnoreCartDiscountsAction
    {
        return new StagedOrderSetDirectDiscountsIgnoreCartDiscountsActionModel(
            $this->directDiscountsIgnoreCartDiscounts
        );
    }

    public static function of(): StagedOrderSetDirectDiscountsIgnoreCartDiscountsActionBuilder
    {
        return new self();
    }
}
