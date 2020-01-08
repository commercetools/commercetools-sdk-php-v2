<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductDiscountUpdate>
 */
final class ProductDiscountUpdateBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?ProductDiscountUpdateActionCollection
     */
    private $actions;

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return null|ProductDiscountUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return $this
     */
    public function withActions(?ProductDiscountUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

    public function build(): ProductDiscountUpdate
    {
        return new ProductDiscountUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): ProductDiscountUpdateBuilder
    {
        return new self();
    }
}
