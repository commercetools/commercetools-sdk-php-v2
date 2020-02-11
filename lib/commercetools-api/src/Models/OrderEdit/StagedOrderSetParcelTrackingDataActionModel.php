<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;
use Commercetools\Api\Models\Order\TrackingData;
use Commercetools\Api\Models\Order\TrackingDataModel;

final class StagedOrderSetParcelTrackingDataActionModel extends JsonObjectModel implements StagedOrderSetParcelTrackingDataAction
{
    public const DISCRIMINATOR_VALUE = 'setParcelTrackingData';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $parcelId;

    /**
     * @var ?TrackingData
     */
    protected $trackingData;


    public function __construct(
        string $parcelId = null,
        TrackingData $trackingData = null
    ) {
        $this->parcelId = $parcelId;
        $this->trackingData = $trackingData;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderUpdateAction::FIELD_ACTION);
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
            $data = $this->raw(StagedOrderSetParcelTrackingDataAction::FIELD_PARCEL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->parcelId = (string) $data;
        }

        return $this->parcelId;
    }

    /**
     * @return null|TrackingData
     */
    public function getTrackingData()
    {
        if (is_null($this->trackingData)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(StagedOrderSetParcelTrackingDataAction::FIELD_TRACKING_DATA);
            if (is_null($data)) {
                return null;
            }

            $this->trackingData = TrackingDataModel::of($data);
        }

        return $this->trackingData;
    }

    public function setParcelId(?string $parcelId): void
    {
        $this->parcelId = $parcelId;
    }

    public function setTrackingData(?TrackingData $trackingData): void
    {
        $this->trackingData = $trackingData;
    }



}
