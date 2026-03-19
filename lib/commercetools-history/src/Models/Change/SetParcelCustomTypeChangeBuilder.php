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
use Commercetools\History\Models\Common\CustomFields;
use Commercetools\History\Models\Common\CustomFieldsBuilder;

/**
 * @implements Builder<SetParcelCustomTypeChange>
 */
final class SetParcelCustomTypeChangeBuilder implements Builder
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

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $previousValue;

    /**

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $nextValue;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
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
     * <p>Value before the change.</p>
     *

     * @return null|CustomFields
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof CustomFieldsBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|CustomFields
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof CustomFieldsBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?CustomFields $previousValue
     * @return $this
     */
    public function withPreviousValue(?CustomFields $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?CustomFields $nextValue
     * @return $this
     */
    public function withNextValue(?CustomFields $nextValue)
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

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?CustomFieldsBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?CustomFieldsBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): SetParcelCustomTypeChange
    {
        return new SetParcelCustomTypeChangeModel(
            $this->change,
            $this->parcel instanceof ParcelChangeValueBuilder ? $this->parcel->build() : $this->parcel,
            $this->previousValue instanceof CustomFieldsBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof CustomFieldsBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): SetParcelCustomTypeChangeBuilder
    {
        return new self();
    }
}
