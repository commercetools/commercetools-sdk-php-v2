<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CartDiscountChangeTargetAction>
 */
final class CartDiscountChangeTargetActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var CartDiscountTarget|?CartDiscountTargetBuilder
     */
    private $target;

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
     * @return null|CartDiscountTarget
     */
    public function getTarget()
    {
        return $this->target instanceof CartDiscountTargetBuilder ? $this->target->build() : $this->target;
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
    public function withTarget(?CartDiscountTarget $target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTargetBuilder(?CartDiscountTargetBuilder $target)
    {
        $this->target = $target;

        return $this;
    }

    public function build(): CartDiscountChangeTargetAction
    {
        return new CartDiscountChangeTargetActionModel(
            $this->action,
            ($this->target instanceof CartDiscountTargetBuilder ? $this->target->build() : $this->target)
        );
    }

    public static function of(): CartDiscountChangeTargetActionBuilder
    {
        return new self();
    }
}
