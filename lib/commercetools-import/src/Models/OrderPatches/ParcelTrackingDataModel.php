<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Orders\TrackingData;
use Commercetools\Import\Models\Orders\TrackingDataModel;
use stdClass;

/**
 * @internal
 */
final class ParcelTrackingDataModel extends JsonObjectModel implements ParcelTrackingData
{
    /**
     *
     * @var ?string
     */
    protected $parcelId;

    /**
     *
     * @var ?TrackingData
     */
    protected $trackingData;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $parcelId = null,
        ?TrackingData $trackingData = null
    ) {
        $this->parcelId = $parcelId;
        $this->trackingData = $trackingData;
    }

    /**
     * <p><code>id</code> of an existing <a href="ctp:api:type:Parcel">Parcel</a>.</p>
     *
     *
     * @return null|string
     */
    public function getParcelId()
    {
        if (is_null($this->parcelId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PARCEL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->parcelId = (string) $data;
        }

        return $this->parcelId;
    }

    /**
     * <p>Information that helps track a Parcel.</p>
     *
     *
     * @return null|TrackingData
     */
    public function getTrackingData()
    {
        if (is_null($this->trackingData)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TRACKING_DATA);
            if (is_null($data)) {
                return null;
            }

            $this->trackingData = TrackingDataModel::of($data);
        }

        return $this->trackingData;
    }


    /**
     * @param ?string $parcelId
     */
    public function setParcelId(?string $parcelId): void
    {
        $this->parcelId = $parcelId;
    }

    /**
     * @param ?TrackingData $trackingData
     */
    public function setTrackingData(?TrackingData $trackingData): void
    {
        $this->trackingData = $trackingData;
    }
}
