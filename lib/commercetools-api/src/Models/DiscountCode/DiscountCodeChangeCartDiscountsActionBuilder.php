<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Api\Models\CartDiscount\CartDiscountResourceIdentifierCollection;
use Commercetools\Base\Builder;

/**
 * @implements Builder<DiscountCodeChangeCartDiscountsAction>
 */
final class DiscountCodeChangeCartDiscountsActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?CartDiscountResourceIdentifierCollection
     */
    private $cartDiscounts;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|CartDiscountResourceIdentifierCollection
     */
    public function getCartDiscounts()
    {
        return $this->cartDiscounts;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCartDiscounts(?CartDiscountResourceIdentifierCollection $cartDiscounts)
    {
        $this->cartDiscounts = $cartDiscounts;

        return $this;
    }

    public function build(): DiscountCodeChangeCartDiscountsAction
    {
        return new DiscountCodeChangeCartDiscountsActionModel(
            $this->action,
            $this->cartDiscounts
        );
    }

    public static function of(): DiscountCodeChangeCartDiscountsActionBuilder
    {
        return new self();
    }
}
