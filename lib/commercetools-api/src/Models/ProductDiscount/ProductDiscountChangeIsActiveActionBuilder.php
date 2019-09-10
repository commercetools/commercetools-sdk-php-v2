<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductDiscountChangeIsActiveAction>
 */
final class ProductDiscountChangeIsActiveActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?bool
     */
    private $isActive;

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
    public function getIsActive()
    {
        return $this->isActive;
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
    public function withIsActive(?bool $isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function build(): ProductDiscountChangeIsActiveAction
    {
        return new ProductDiscountChangeIsActiveActionModel(
            $this->action,
            $this->isActive
        );
    }

    public static function of(): ProductDiscountChangeIsActiveActionBuilder
    {
        return new self();
    }
}
