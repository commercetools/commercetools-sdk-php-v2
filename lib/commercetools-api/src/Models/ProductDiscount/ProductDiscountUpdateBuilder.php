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
     * @var ?ProductDiscountUpdateActionCollection
     */
    private $actions;

    /**
     * @var ?int
     */
    private $version;

    public function __construct()
    {
    }

    /**
     * @return null|ProductDiscountUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return $this
     */
    public function withActions(?ProductDiscountUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    public function build(): ProductDiscountUpdate
    {
        return new ProductDiscountUpdateModel(
            $this->actions,
            $this->version
        );
    }

    public static function of(): ProductDiscountUpdateBuilder
    {
        return new self();
    }
}
