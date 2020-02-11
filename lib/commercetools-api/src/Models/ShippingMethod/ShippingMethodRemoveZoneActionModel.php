<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Zone\ZoneResourceIdentifier;
use Commercetools\Api\Models\Zone\ZoneResourceIdentifierModel;

final class ShippingMethodRemoveZoneActionModel extends JsonObjectModel implements ShippingMethodRemoveZoneAction
{
    public const DISCRIMINATOR_VALUE = 'removeZone';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?ZoneResourceIdentifier
     */
    protected $zone;


    public function __construct(
        ZoneResourceIdentifier $zone = null
    ) {
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
     * @return null|ZoneResourceIdentifier
     */
    public function getZone()
    {
        if (is_null($this->zone)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ShippingMethodRemoveZoneAction::FIELD_ZONE);
            if (is_null($data)) {
                return null;
            }

            $this->zone = ZoneResourceIdentifierModel::of($data);
        }

        return $this->zone;
    }

    public function setZone(?ZoneResourceIdentifier $zone): void
    {
        $this->zone = $zone;
    }



}
