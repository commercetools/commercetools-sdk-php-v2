<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CartUpdate>
 */
final class CartUpdateBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?CartUpdateActionCollection
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
     * @return null|CartUpdateActionCollection
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
    public function withActions(?CartUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

    public function build(): CartUpdate
    {
        return new CartUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): CartUpdateBuilder
    {
        return new self();
    }
}
