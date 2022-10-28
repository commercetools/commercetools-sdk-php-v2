<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Zone\ZoneReference;
use Commercetools\Api\Models\Zone\ZoneReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ZoneRateModel extends JsonObjectModel implements ZoneRate
{
    /**
     *
     * @var ?ZoneReference
     */
    protected $zone;

    /**
     *
     * @var ?ShippingRateCollection
     */
    protected $shippingRates;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ZoneReference $zone = null,
        ?ShippingRateCollection $shippingRates = null
    ) {
        $this->zone = $zone;
        $this->shippingRates = $shippingRates;
    }

    /**
     * <p><a href="ctp:api:type:Zone">Zone</a> for which the shipping rates are valid.</p>
     *
     *
     * @return null|ZoneReference
     */
    public function getZone()
    {
        if (is_null($this->zone)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ZONE);
            if (is_null($data)) {
                return null;
            }

            $this->zone = ZoneReferenceModel::of($data);
        }

        return $this->zone;
    }

    /**
     * <p>Shipping rates defined per currency.</p>
     *
     *
     * @return null|ShippingRateCollection
     */
    public function getShippingRates()
    {
        if (is_null($this->shippingRates)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_SHIPPING_RATES);
            if (is_null($data)) {
                return null;
            }
            $this->shippingRates = ShippingRateCollection::fromArray($data);
        }

        return $this->shippingRates;
    }


    /**
     * @param ?ZoneReference $zone
     */
    public function setZone(?ZoneReference $zone): void
    {
        $this->zone = $zone;
    }

    /**
     * @param ?ShippingRateCollection $shippingRates
     */
    public function setShippingRates(?ShippingRateCollection $shippingRates): void
    {
        $this->shippingRates = $shippingRates;
    }
}
