<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CartDiscountUpdate>
 */
final class CartDiscountUpdateBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?CartDiscountUpdateActionCollection
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
     * @return null|CartDiscountUpdateActionCollection
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
    public function withActions(?CartDiscountUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

    public function build(): CartDiscountUpdate
    {
        return new CartDiscountUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): CartDiscountUpdateBuilder
    {
        return new self();
    }
}
