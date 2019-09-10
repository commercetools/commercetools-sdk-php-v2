<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CartDiscountChangeRequiresDiscountCodeAction>
 */
final class CartDiscountChangeRequiresDiscountCodeActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?bool
     */
    private $requiresDiscountCode;

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
     * @return null|bool
     */
    public function getRequiresDiscountCode()
    {
        return $this->requiresDiscountCode;
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
    public function withRequiresDiscountCode(?bool $requiresDiscountCode)
    {
        $this->requiresDiscountCode = $requiresDiscountCode;

        return $this;
    }

    public function build(): CartDiscountChangeRequiresDiscountCodeAction
    {
        return new CartDiscountChangeRequiresDiscountCodeActionModel(
            $this->action,
            $this->requiresDiscountCode
        );
    }

    public static function of(): CartDiscountChangeRequiresDiscountCodeActionBuilder
    {
        return new self();
    }
}
