<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Zone\ZoneReference;
use Commercetools\Api\Models\Zone\ZoneReferenceModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ZoneRateModel extends JsonObjectModel implements ZoneRate
{
    /**
     * @var ?ZoneReference
     */
    protected $zone;

    /**
     * @var ?ShippingRateCollection
     */
    protected $shippingRates;

    public function __construct(
        ZoneReference $zone = null,
        ShippingRateCollection $shippingRates = null
    ) {
        $this->zone = $zone;
        $this->shippingRates = $shippingRates;
    }

    /**
     * @return null|ZoneReference
     */
    public function getZone()
    {
        if (is_null($this->zone)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ZoneRate::FIELD_ZONE);
            if (is_null($data)) {
                return null;
            }

            $this->zone = ZoneReferenceModel::of($data);
        }

        return $this->zone;
    }

    /**
     * @return null|ShippingRateCollection
     */
    public function getShippingRates()
    {
        if (is_null($this->shippingRates)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ZoneRate::FIELD_SHIPPING_RATES);
            if (is_null($data)) {
                return null;
            }
            $this->shippingRates = ShippingRateCollection::fromArray($data);
        }

        return $this->shippingRates;
    }

    public function setZone(?ZoneReference $zone): void
    {
        $this->zone = $zone;
    }

    public function setShippingRates(?ShippingRateCollection $shippingRates): void
    {
        $this->shippingRates = $shippingRates;
    }
}
