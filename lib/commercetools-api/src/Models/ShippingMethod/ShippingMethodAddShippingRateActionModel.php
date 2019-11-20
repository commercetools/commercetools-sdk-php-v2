<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Zone\ZoneResourceIdentifier;
use Commercetools\Api\Models\Zone\ZoneResourceIdentifierModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ShippingMethodAddShippingRateActionModel extends JsonObjectModel implements ShippingMethodAddShippingRateAction
{
    const DISCRIMINATOR_VALUE = 'addShippingRate';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?ShippingRateDraft
     */
    protected $shippingRate;

    /**
     * @var ?ZoneResourceIdentifier
     */
    protected $zone;

    public function __construct(
        ShippingRateDraft $shippingRate = null,
        ZoneResourceIdentifier $zone = null
    ) {
        $this->shippingRate = $shippingRate;
        $this->zone = $zone;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShippingMethodUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|ShippingRateDraft
     */
    public function getShippingRate()
    {
        if (is_null($this->shippingRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ShippingMethodAddShippingRateAction::FIELD_SHIPPING_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->shippingRate = ShippingRateDraftModel::of($data);
        }

        return $this->shippingRate;
    }

    /**
     * @return null|ZoneResourceIdentifier
     */
    public function getZone()
    {
        if (is_null($this->zone)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ShippingMethodAddShippingRateAction::FIELD_ZONE);
            if (is_null($data)) {
                return null;
            }

            $this->zone = ZoneResourceIdentifierModel::of($data);
        }

        return $this->zone;
    }

    public function setShippingRate(?ShippingRateDraft $shippingRate): void
    {
        $this->shippingRate = $shippingRate;
    }

    public function setZone(?ZoneResourceIdentifier $zone): void
    {
        $this->zone = $zone;
    }
}
