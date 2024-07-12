<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ShippingMethodChangeActiveAction>
 */
final class ShippingMethodChangeActiveActionBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $active;

    /**
     * <p>Value to set.</p>
     * <p>If set to <code>false</code>, the ShippingMethod cannot be used during the creation or update of a Cart or Order.</p>
     *

     * @return null|bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param ?bool $active
     * @return $this
     */
    public function withActive(?bool $active)
    {
        $this->active = $active;

        return $this;
    }


    public function build(): ShippingMethodChangeActiveAction
    {
        return new ShippingMethodChangeActiveActionModel(
            $this->active
        );
    }

    public static function of(): ShippingMethodChangeActiveActionBuilder
    {
        return new self();
    }
}
