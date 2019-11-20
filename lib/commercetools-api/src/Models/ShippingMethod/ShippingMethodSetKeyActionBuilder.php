<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ShippingMethodSetKeyAction>
 */
final class ShippingMethodSetKeyActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    public function build(): ShippingMethodSetKeyAction
    {
        return new ShippingMethodSetKeyActionModel(
            $this->key
        );
    }

    public static function of(): ShippingMethodSetKeyActionBuilder
    {
        return new self();
    }
}
