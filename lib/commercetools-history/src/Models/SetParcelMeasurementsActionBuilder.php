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
 * @implements Builder<SetParcelMeasurementsAction>
 */
final class SetParcelMeasurementsActionBuilder implements Builder
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
     * @var null|ParcelMeasurements|ParcelMeasurementsBuilder
     */
    private $nextValue;

    /**
     * @var null|ParcelMeasurements|ParcelMeasurementsBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setParcelMeasurements</code></p>
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
     * @return null|ParcelMeasurements
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ParcelMeasurementsBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @return null|ParcelMeasurements
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ParcelMeasurementsBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?ParcelMeasurements $nextValue
     * @return $this
     */
    public function withNextValue(?ParcelMeasurements $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?ParcelMeasurements $previousValue
     * @return $this
     */
    public function withPreviousValue(?ParcelMeasurements $previousValue)
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
    public function withNextValueBuilder(?ParcelMeasurementsBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?ParcelMeasurementsBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): SetParcelMeasurementsAction
    {
        return new SetParcelMeasurementsActionModel(
            $this->change,
            $this->parcel instanceof ParcelActionValueBuilder ? $this->parcel->build() : $this->parcel,
            $this->nextValue instanceof ParcelMeasurementsBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof ParcelMeasurementsBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): SetParcelMeasurementsActionBuilder
    {
        return new self();
    }
}
