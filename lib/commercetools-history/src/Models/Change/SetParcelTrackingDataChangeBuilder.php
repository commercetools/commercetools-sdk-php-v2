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
use Commercetools\History\Models\Common\TrackingData;
use Commercetools\History\Models\Common\TrackingDataBuilder;

/**
 * @implements Builder<SetParcelTrackingDataChange>
 */
final class SetParcelTrackingDataChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|TrackingData|TrackingDataBuilder
     */
    private $previousValue;

    /**

     * @var null|TrackingData|TrackingDataBuilder
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

     * @return null|TrackingData
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof TrackingDataBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|TrackingData
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof TrackingDataBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?TrackingData $previousValue
     * @return $this
     */
    public function withPreviousValue(?TrackingData $previousValue)
    {
        $this->previousValue = $previousValue;

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
    public function withPreviousValueBuilder(?TrackingDataBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?TrackingDataBuilder $nextValue)
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

    public function build(): SetParcelTrackingDataChange
    {
        return new SetParcelTrackingDataChangeModel(
            $this->change,
            $this->previousValue instanceof TrackingDataBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof TrackingDataBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->parcel instanceof ParcelChangeValueBuilder ? $this->parcel->build() : $this->parcel,
            $this->shippingKey
        );
    }

    public static function of(): SetParcelTrackingDataChangeBuilder
    {
        return new self();
    }
}
