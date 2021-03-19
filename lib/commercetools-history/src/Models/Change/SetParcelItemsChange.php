<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\ChangeValue\ParcelChangeValue;
use Commercetools\History\Models\Common\DeliveryItemCollection;

interface SetParcelItemsChange extends Change
{

    public const FIELD_PARCEL = 'parcel';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>setParcelItems</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|ParcelChangeValue
     */
    public function getParcel();

    /**
     * @return null|DeliveryItemCollection
     */
    public function getNextValue();

    /**
     * @return null|DeliveryItemCollection
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ParcelChangeValue $parcel
     */
    public function setParcel(?ParcelChangeValue $parcel): void;

    /**
     * @param ?DeliveryItemCollection $nextValue
     */
    public function setNextValue(?DeliveryItemCollection $nextValue): void;

    /**
     * @param ?DeliveryItemCollection $previousValue
     */
    public function setPreviousValue(?DeliveryItemCollection $previousValue): void;
}
