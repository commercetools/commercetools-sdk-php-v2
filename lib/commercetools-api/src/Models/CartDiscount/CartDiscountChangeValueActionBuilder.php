<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CartDiscountChangeValueAction>
 */
final class CartDiscountChangeValueActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var CartDiscountValue|?CartDiscountValueBuilder
     */
    private $value;

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
     * @return null|CartDiscountValue
     */
    public function getValue()
    {
        return $this->value instanceof CartDiscountValueBuilder ? $this->value->build() : $this->value;
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
    public function withValue(?CartDiscountValue $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValueBuilder(?CartDiscountValueBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): CartDiscountChangeValueAction
    {
        return new CartDiscountChangeValueActionModel(
            $this->action,
            ($this->value instanceof CartDiscountValueBuilder ? $this->value->build() : $this->value)
        );
    }

    public static function of(): CartDiscountChangeValueActionBuilder
    {
        return new self();
    }
}
