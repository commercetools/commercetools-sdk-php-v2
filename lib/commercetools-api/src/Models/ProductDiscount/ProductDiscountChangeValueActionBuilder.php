<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductDiscountChangeValueAction>
 */
final class ProductDiscountChangeValueActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ProductDiscountValue|?ProductDiscountValueBuilder
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
     * @return null|ProductDiscountValue
     */
    public function getValue()
    {
        return $this->value instanceof ProductDiscountValueBuilder ? $this->value->build() : $this->value;
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
    public function withValue(?ProductDiscountValue $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValueBuilder(?ProductDiscountValueBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): ProductDiscountChangeValueAction
    {
        return new ProductDiscountChangeValueActionModel(
            $this->action,
            ($this->value instanceof ProductDiscountValueBuilder ? $this->value->build() : $this->value)
        );
    }

    public static function of(): ProductDiscountChangeValueActionBuilder
    {
        return new self();
    }
}
