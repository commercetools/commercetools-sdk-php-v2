<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class SetParcelTrackingDataActionModel extends JsonObjectModel implements SetParcelTrackingDataAction
{
    public const DISCRIMINATOR_VALUE = 'SetParcelTrackingDataAction';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $change;

    /**
     * @var ?ParcelActionValue
     */
    protected $parcel;

    /**
     * @var ?TrackingData
     */
    protected $nextValue;

    /**
     * @var ?TrackingData
     */
    protected $previousValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?ParcelActionValue $parcel = null,
        ?TrackingData $nextValue = null,
        ?TrackingData $previousValue = null
    ) {
        $this->change = $change;
        $this->parcel = $parcel;
        $this->nextValue = $nextValue;
        $this->previousValue = $previousValue;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type =  (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Update action for <code>setParcelTrackingData</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        if (is_null($this->change)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CHANGE);
            if (is_null($data)) {
                return null;
            }
            $this->change =  (string) $data;
        }

        return $this->change;
    }

    /**
     * @return null|ParcelActionValue
     */
    public function getParcel()
    {
        if (is_null($this->parcel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PARCEL);
            if (is_null($data)) {
                return null;
            }

            $this->parcel =  ParcelActionValueModel::of($data);
        }

        return $this->parcel;
    }

    /**
     * @return null|TrackingData
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->nextValue =  TrackingDataModel::of($data);
        }

        return $this->nextValue;
    }

    /**
     * @return null|TrackingData
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->previousValue =  TrackingDataModel::of($data);
        }

        return $this->previousValue;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?ParcelActionValue $parcel
     */
    public function setParcel(?ParcelActionValue $parcel): void
    {
        $this->parcel = $parcel;
    }

    /**
     * @param ?TrackingData $nextValue
     */
    public function setNextValue(?TrackingData $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?TrackingData $previousValue
     */
    public function setPreviousValue(?TrackingData $previousValue): void
    {
        $this->previousValue = $previousValue;
    }



}
