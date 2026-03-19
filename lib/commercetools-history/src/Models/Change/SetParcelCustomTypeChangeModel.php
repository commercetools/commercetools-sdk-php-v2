<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\ChangeValue\ParcelChangeValue;
use Commercetools\History\Models\ChangeValue\ParcelChangeValueModel;
use Commercetools\History\Models\Common\CustomFields;
use Commercetools\History\Models\Common\CustomFieldsModel;

/**
 * @internal
 */
final class SetParcelCustomTypeChangeModel extends JsonObjectModel implements SetParcelCustomTypeChange
{

    public const DISCRIMINATOR_VALUE = 'SetParcelCustomTypeChange';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $change;

    /**
     *
     * @var ?ParcelChangeValue
     */
    protected $parcel;

    /**
     *
     * @var ?CustomFields
     */
    protected $previousValue;

    /**
     *
     * @var ?CustomFields
     */
    protected $nextValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?ParcelChangeValue $parcel = null,
        ?CustomFields $previousValue = null,
        ?CustomFields $nextValue = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->parcel = $parcel;
        $this->previousValue = $previousValue;
        $this->nextValue = $nextValue;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
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
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
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
            $this->change = (string) $data;
        }

        return $this->change;
    }

    /**
     * <p>Information about the updated Parcel.</p>
     *
     *
     * @return null|ParcelChangeValue
     */
    public function getParcel()
    {
        if (is_null($this->parcel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PARCEL);
            if (is_null($data)) {
                return null;
            }

            $this->parcel = ParcelChangeValueModel::of($data);
        }

        return $this->parcel;
    }

    /**
     * <p>Value before the change.</p>
     *
     *
     * @return null|CustomFields
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->previousValue = CustomFieldsModel::of($data);
        }

        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *
     *
     * @return null|CustomFields
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->nextValue = CustomFieldsModel::of($data);
        }

        return $this->nextValue;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?ParcelChangeValue $parcel
     */
    public function setParcel(?ParcelChangeValue $parcel): void
    {
        $this->parcel = $parcel;
    }

    /**
     * @param ?CustomFields $previousValue
     */
    public function setPreviousValue(?CustomFields $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?CustomFields $nextValue
     */
    public function setNextValue(?CustomFields $nextValue): void
    {
        $this->nextValue = $nextValue;
    }



}
