<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SetParcelTrackingDataAction>
 */
final class SetParcelTrackingDataActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|ParcelActionValue|ParcelActionValueBuilder
     */
    private $parcel;

    /**
     * @var null|TrackingData|TrackingDataBuilder
     */
    private $nextValue;

    /**
     * @var null|TrackingData|TrackingDataBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setParcelTrackingData</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|ParcelActionValue
     */
    public function getParcel()
    {
        return $this->parcel instanceof ParcelActionValueBuilder ? $this->parcel->build() : $this->parcel;
    }

    /**
     * @return null|TrackingData
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof TrackingDataBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @return null|TrackingData
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof TrackingDataBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?ParcelActionValue $parcel
     * @return $this
     */
    public function withParcel(?ParcelActionValue $parcel)
    {
        $this->parcel = $parcel;

        return $this;
    }

    /**
     * @param ?TrackingData $nextValue
     * @return $this
     */
    public function withNextValue(?TrackingData $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?TrackingData $previousValue
     * @return $this
     */
    public function withPreviousValue(?TrackingData $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withParcelBuilder(?ParcelActionValueBuilder $parcel)
    {
        $this->parcel = $parcel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?TrackingDataBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?TrackingDataBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): SetParcelTrackingDataAction
    {
        return new SetParcelTrackingDataActionModel(
            $this->change,
            $this->parcel instanceof ParcelActionValueBuilder ? $this->parcel->build() : $this->parcel,
            $this->nextValue instanceof TrackingDataBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof TrackingDataBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): SetParcelTrackingDataActionBuilder
    {
        return new self();
    }
}
