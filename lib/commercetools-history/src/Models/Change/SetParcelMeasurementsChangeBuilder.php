<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\ChangeValue\ParcelChangeValue;
use Commercetools\History\Models\ChangeValue\ParcelChangeValueBuilder;
use Commercetools\History\Models\Common\ParcelMeasurements;
use Commercetools\History\Models\Common\ParcelMeasurementsBuilder;

/**
 * @implements Builder<SetParcelMeasurementsChange>
 */
final class SetParcelMeasurementsChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|ParcelChangeValue|ParcelChangeValueBuilder
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
     * @return null|ParcelChangeValue
     */
    public function getParcel()
    {
        return $this->parcel instanceof ParcelChangeValueBuilder ? $this->parcel->build() : $this->parcel;
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
     * @param ?ParcelChangeValue $parcel
     * @return $this
     */
    public function withParcel(?ParcelChangeValue $parcel)
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
     * @deprecated use withParcel() instead
     * @return $this
     */
    public function withParcelBuilder(?ParcelChangeValueBuilder $parcel)
    {
        $this->parcel = $parcel;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?ParcelMeasurementsBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?ParcelMeasurementsBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): SetParcelMeasurementsChange
    {
        return new SetParcelMeasurementsChangeModel(
            $this->change,
            $this->parcel instanceof ParcelChangeValueBuilder ? $this->parcel->build() : $this->parcel,
            $this->nextValue instanceof ParcelMeasurementsBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof ParcelMeasurementsBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): SetParcelMeasurementsChangeBuilder
    {
        return new self();
    }
}
