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
 * @implements Builder<ShippingMethodSetCarrierAction>
 */
final class ShippingMethodSetCarrierActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $carrier;

    /**
     * <p>Name of the carrier that delivers the parcel, for example <code>DHL</code>. If <code>carrier</code> is absent or <code>null</code>, it is removed if it exists.</p>
     *

     * @return null|string
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @param ?string $carrier
     * @return $this
     */
    public function withCarrier(?string $carrier)
    {
        $this->carrier = $carrier;

        return $this;
    }


    public function build(): ShippingMethodSetCarrierAction
    {
        return new ShippingMethodSetCarrierActionModel(
            $this->carrier
        );
    }

    public static function of(): ShippingMethodSetCarrierActionBuilder
    {
        return new self();
    }
}
