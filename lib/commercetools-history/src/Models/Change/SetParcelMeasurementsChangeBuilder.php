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

     * @var null|ParcelMeasurements|ParcelMeasurementsBuilder
     */
    private $previousValue;

    /**

     * @var null|ParcelMeasurements|ParcelMeasurementsBuilder
     */
    private $nextValue;

    /**

     * @var null|ParcelChangeValue|ParcelChangeValueBuilder
     */
    private $parcel;

    /**

     * @var ?string
     */
    private $shippingKey;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|ParcelMeasurements
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ParcelMeasurementsBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ParcelMeasurements
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ParcelMeasurementsBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * <p>Information about the updated Parcel.</p>
     *

     * @return null|ParcelChangeValue
     */
    public function getParcel()
    {
        return $this->parcel instanceof ParcelChangeValueBuilder ? $this->parcel->build() : $this->parcel;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> associated with the Delivery.
     * Only present when the Order uses the <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|string
     */
    public function getShippingKey()
    {
        return $this->shippingKey;
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
     * @param ?ParcelMeasurements $previousValue
     * @return $this
     */
    public function withPreviousValue(?ParcelMeasurements $previousValue)
    {
        $this->previousValue = $previousValue;

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
     * @param ?ParcelChangeValue $parcel
     * @return $this
     */
    public function withParcel(?ParcelChangeValue $parcel)
    {
        $this->parcel = $parcel;

        return $this;
    }

    /**
     * @param ?string $shippingKey
     * @return $this
     */
    public function withShippingKey(?string $shippingKey)
    {
        $this->shippingKey = $shippingKey;

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
     * @deprecated use withParcel() instead
     * @return $this
     */
    public function withParcelBuilder(?ParcelChangeValueBuilder $parcel)
    {
        $this->parcel = $parcel;

        return $this;
    }

    public function build(): SetParcelMeasurementsChange
    {
        return new SetParcelMeasurementsChangeModel(
            $this->change,
            $this->previousValue instanceof ParcelMeasurementsBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof ParcelMeasurementsBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->parcel instanceof ParcelChangeValueBuilder ? $this->parcel->build() : $this->parcel,
            $this->shippingKey
        );
    }

    public static function of(): SetParcelMeasurementsChangeBuilder
    {
        return new self();
    }
}
