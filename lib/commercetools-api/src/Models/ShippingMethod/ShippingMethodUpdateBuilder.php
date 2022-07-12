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
 * @implements Builder<ShippingMethodUpdate>
 */
final class ShippingMethodUpdateBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?ShippingMethodUpdateActionCollection
     */
    private $actions;

    /**
     * <p>Expected version of the ShippingMethod on which the changes should be applied. If the expected version does not match the actual version, a 409 Conflict will be returned.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Update actions to be performed on the <a href="/projects/shippingMethods#shippingmethod">ShippingMethod</a>.</p>
     *

     * @return null|ShippingMethodUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?ShippingMethodUpdateActionCollection $actions
     * @return $this
     */
    public function withActions(?ShippingMethodUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): ShippingMethodUpdate
    {
        return new ShippingMethodUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): ShippingMethodUpdateBuilder
    {
        return new self();
    }
}
