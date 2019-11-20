<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductTypeUpdate>
 */
final class ProductTypeUpdateBuilder implements Builder
{
    /**
     * @var ?ProductTypeUpdateActionCollection
     */
    private $actions;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @return null|ProductTypeUpdateActionCollection
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
    public function withActions(?ProductTypeUpdateActionCollection $actions)
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

    public function build(): ProductTypeUpdate
    {
        return new ProductTypeUpdateModel(
            $this->actions,
            $this->version
        );
    }

    public static function of(): ProductTypeUpdateBuilder
    {
        return new self();
    }
}
