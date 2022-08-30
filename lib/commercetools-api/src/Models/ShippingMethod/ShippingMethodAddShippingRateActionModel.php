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
final class ShippingMethodAddShippingRateActionModel extends JsonObjectModel implements ShippingMethodAddShippingRateAction
{
    public const DISCRIMINATOR_VALUE = 'addShippingRate';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?ZoneResourceIdentifier
     */
    protected $zone;

    /**
     *
     * @var ?ShippingRateDraft
     */
    protected $shippingRate;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ZoneResourceIdentifier $zone = null,
        ?ShippingRateDraft $shippingRate = null,
        ?string $action = null
    ) {
        $this->zone = $zone;
        $this->shippingRate = $shippingRate;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p><a href="ctp:api:type:Zone">Zone</a> to which the ShippingRate should be added.</p>
     *
     *
     * @return null|ZoneResourceIdentifier
     */
    public function getZone()
    {
        if (is_null($this->zone)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ZONE);
            if (is_null($data)) {
                return null;
            }

            $this->zone = ZoneResourceIdentifierModel::of($data);
        }

        return $this->zone;
    }

    /**
     * <p>Value to add to <code>shippingRates</code>.</p>
     *
     *
     * @return null|ShippingRateDraft
     */
    public function getShippingRate()
    {
        if (is_null($this->shippingRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->shippingRate = ShippingRateDraftModel::of($data);
        }

        return $this->shippingRate;
    }


    /**
     * @param ?ZoneResourceIdentifier $zone
     */
    public function setZone(?ZoneResourceIdentifier $zone): void
    {
        $this->zone = $zone;
    }

    /**
     * @param ?ShippingRateDraft $shippingRate
     */
    public function setShippingRate(?ShippingRateDraft $shippingRate): void
    {
        $this->shippingRate = $shippingRate;
    }
}
