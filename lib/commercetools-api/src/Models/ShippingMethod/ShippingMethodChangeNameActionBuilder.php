<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ShippingMethodChangeNameAction>
 */
final class ShippingMethodChangeNameActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    public function build(): ShippingMethodChangeNameAction
    {
        return new ShippingMethodChangeNameActionModel(
            $this->name
        );
    }

    public static function of(): ShippingMethodChangeNameActionBuilder
    {
        return new self();
    }
}
