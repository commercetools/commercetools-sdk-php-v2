<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Order\Parcel;
use Commercetools\Api\Models\Order\ParcelModel;

final class ParcelRemovedFromDeliveryMessagePayloadModel extends JsonObjectModel implements ParcelRemovedFromDeliveryMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ParcelRemovedFromDelivery';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $deliveryId;

    /**
     * @var ?Parcel
     */
    protected $parcel;


    public function __construct(
        string $deliveryId = null,
        Parcel $parcel = null
    ) {
        $this->deliveryId = $deliveryId;
        $this->parcel = $parcel;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MessagePayload::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getDeliveryId()
    {
        if (is_null($this->deliveryId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ParcelRemovedFromDeliveryMessagePayload::FIELD_DELIVERY_ID);
            if (is_null($data)) {
                return null;
            }
            $this->deliveryId = (string) $data;
        }

        return $this->deliveryId;
    }

    /**
     * @return null|Parcel
     */
    public function getParcel()
    {
        if (is_null($this->parcel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ParcelRemovedFromDeliveryMessagePayload::FIELD_PARCEL);
            if (is_null($data)) {
                return null;
            }

            $this->parcel = ParcelModel::of($data);
        }

        return $this->parcel;
    }

    public function setDeliveryId(?string $deliveryId): void
    {
        $this->deliveryId = $deliveryId;
    }

    public function setParcel(?Parcel $parcel): void
    {
        $this->parcel = $parcel;
    }



}
