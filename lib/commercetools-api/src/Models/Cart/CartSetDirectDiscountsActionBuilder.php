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
 * @implements Builder<CartSetDirectDiscountsAction>
 */
final class CartSetDirectDiscountsActionBuilder implements Builder
{
    /**

     * @var ?DirectDiscountDraftCollection
     */
    private $discounts;

    /**
     * <ul>
     * <li>If set, all existing Direct Discounts are replaced.
     * The discounts apply in the order they are added to the list.</li>
     * <li>If empty, all existing Direct Discounts are removed and all affected prices on the Cart or Order are recalculated.</li>
     * </ul>
     *

     * @return null|DirectDiscountDraftCollection
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    /**
     * @param ?DirectDiscountDraftCollection $discounts
     * @return $this
     */
    public function withDiscounts(?DirectDiscountDraftCollection $discounts)
    {
        $this->discounts = $discounts;

        return $this;
    }


    public function build(): CartSetDirectDiscountsAction
    {
        return new CartSetDirectDiscountsActionModel(
            $this->discounts
        );
    }

    public static function of(): CartSetDirectDiscountsActionBuilder
    {
        return new self();
    }
}
