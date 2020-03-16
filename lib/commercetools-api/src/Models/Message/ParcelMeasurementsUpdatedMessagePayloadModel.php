<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\ParcelMeasurements;
use Commercetools\Api\Models\Order\ParcelMeasurementsModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ParcelMeasurementsUpdatedMessagePayloadModel extends JsonObjectModel implements ParcelMeasurementsUpdatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ParcelMeasurementsUpdated';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $deliveryId;

    /**
     * @var ?string
     */
    protected $parcelId;

    /**
     * @var ?ParcelMeasurements
     */
    protected $measurements;


    public function __construct(
        string $deliveryId = null,
        string $parcelId = null,
        ParcelMeasurements $measurements = null
    ) {
        $this->deliveryId = $deliveryId;
        $this->parcelId = $parcelId;
        $this->measurements = $measurements;
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
            $data = $this->raw(ParcelMeasurementsUpdatedMessagePayload::FIELD_DELIVERY_ID);
            if (is_null($data)) {
                return null;
            }
            $this->deliveryId = (string) $data;
        }

        return $this->deliveryId;
    }

    /**
     * @return null|string
     */
    public function getParcelId()
    {
        if (is_null($this->parcelId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ParcelMeasurementsUpdatedMessagePayload::FIELD_PARCEL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->parcelId = (string) $data;
        }

        return $this->parcelId;
    }

    /**
     * @return null|ParcelMeasurements
     */
    public function getMeasurements()
    {
        if (is_null($this->measurements)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ParcelMeasurementsUpdatedMessagePayload::FIELD_MEASUREMENTS);
            if (is_null($data)) {
                return null;
            }

            $this->measurements = ParcelMeasurementsModel::of($data);
        }

        return $this->measurements;
    }

    public function setDeliveryId(?string $deliveryId): void
    {
        $this->deliveryId = $deliveryId;
    }

    public function setParcelId(?string $parcelId): void
    {
        $this->parcelId = $parcelId;
    }

    public function setMeasurements(?ParcelMeasurements $measurements): void
    {
        $this->measurements = $measurements;
    }
}
