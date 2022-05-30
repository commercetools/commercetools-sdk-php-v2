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
 * @implements Builder<CartDiscountChangeRequiresDiscountCodeAction>
 */
final class CartDiscountChangeRequiresDiscountCodeActionBuilder implements Builder
{
    /**
     * @var ?bool
     */
    private $requiresDiscountCode;

    /**
     * <p>New value to set.
     * If set to <code>true</code>, the Discount can only be used in connection with a <a href="ctp:api:type:DiscountCode">DiscountCode</a>.</p>
     *
     * @return null|bool
     */
    public function getRequiresDiscountCode()
    {
        return $this->requiresDiscountCode;
    }

    /**
     * @param ?bool $requiresDiscountCode
     * @return $this
     */
    public function withRequiresDiscountCode(?bool $requiresDiscountCode)
    {
        $this->requiresDiscountCode = $requiresDiscountCode;

        return $this;
    }


    public function build(): CartDiscountChangeRequiresDiscountCodeAction
    {
        return new CartDiscountChangeRequiresDiscountCodeActionModel(
            $this->requiresDiscountCode
        );
    }

    public static function of(): CartDiscountChangeRequiresDiscountCodeActionBuilder
    {
        return new self();
    }
}
