<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Zone\ZoneResourceIdentifier;
use Commercetools\Api\Models\Zone\ZoneResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ZoneRateDraftModel extends JsonObjectModel implements ZoneRateDraft
{
    /**
     * @var ?ZoneResourceIdentifier
     */
    protected $zone;

    /**
     * @var ?ShippingRateDraftCollection
     */
    protected $shippingRates;


    public function __construct(
        ZoneResourceIdentifier $zone = null,
        ShippingRateDraftCollection $shippingRates = null
    ) {
        $this->zone = $zone;
        $this->shippingRates = $shippingRates;
    }

    /**
     * @return null|ZoneResourceIdentifier
     */
    public function getZone()
    {
        if (is_null($this->zone)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ZoneRateDraft::FIELD_ZONE);
            if (is_null($data)) {
                return null;
            }

            $this->zone = ZoneResourceIdentifierModel::of($data);
        }

        return $this->zone;
    }

    /**
     * <p>The array must not contain two shipping rates with the same currency.</p>
     *
     * @return null|ShippingRateDraftCollection
     */
    public function getShippingRates()
    {
        if (is_null($this->shippingRates)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ZoneRateDraft::FIELD_SHIPPING_RATES);
            if (is_null($data)) {
                return null;
            }
            $this->shippingRates = ShippingRateDraftCollection::fromArray($data);
        }

        return $this->shippingRates;
    }

    public function setZone(?ZoneResourceIdentifier $zone): void
    {
        $this->zone = $zone;
    }

    public function setShippingRates(?ShippingRateDraftCollection $shippingRates): void
    {
        $this->shippingRates = $shippingRates;
    }
}
