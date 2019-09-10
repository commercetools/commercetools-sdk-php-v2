<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObjectModel;

final class OrderRemoveParcelFromDeliveryActionModel extends JsonObjectModel implements OrderRemoveParcelFromDeliveryAction
{
    const DISCRIMINATOR_VALUE = 'removeParcelFromDelivery';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $parcelId;

    public function __construct(
        string $action = null,
        string $parcelId = null
    ) {
        $this->action = $action;
        $this->parcelId = $parcelId;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getParcelId()
    {
        if (is_null($this->parcelId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderRemoveParcelFromDeliveryAction::FIELD_PARCEL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->parcelId = (string) $data;
        }

        return $this->parcelId;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setParcelId(?string $parcelId): void
    {
        $this->parcelId = $parcelId;
    }
}
