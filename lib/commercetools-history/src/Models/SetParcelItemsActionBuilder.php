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
 * @implements Builder<SetParcelItemsAction>
 */
final class SetParcelItemsActionBuilder implements Builder
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
     * @var ?DeliveryItemCollection
     */
    private $nextValue;

    /**
     * @var ?DeliveryItemCollection
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setParcelItems</code></p>
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
     * @return null|DeliveryItemCollection
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * @return null|DeliveryItemCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
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
     * @param ?DeliveryItemCollection $nextValue
     * @return $this
     */
    public function withNextValue(?DeliveryItemCollection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?DeliveryItemCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?DeliveryItemCollection $previousValue)
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

    public function build(): SetParcelItemsAction
    {
        return new SetParcelItemsActionModel(
            $this->change,
            $this->parcel instanceof ParcelActionValueBuilder ? $this->parcel->build() : $this->parcel,
            $this->nextValue,
            $this->previousValue
        );
    }

    public static function of(): SetParcelItemsActionBuilder
    {
        return new self();
    }
}
