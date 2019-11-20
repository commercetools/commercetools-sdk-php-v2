<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ShippingMethodUpdate>
 */
final class ShippingMethodUpdateBuilder implements Builder
{
    /**
     * @var ?ShippingMethodUpdateActionCollection
     */
    private $actions;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @return null|ShippingMethodUpdateActionCollection
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
    public function withActions(?ShippingMethodUpdateActionCollection $actions)
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

    public function build(): ShippingMethodUpdate
    {
        return new ShippingMethodUpdateModel(
            $this->actions,
            $this->version
        );
    }

    public static function of(): ShippingMethodUpdateBuilder
    {
        return new self();
    }
}
