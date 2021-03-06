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
use Commercetools\History\Models\Common\DeliveryItemCollection;

/**
 * @internal
 */
final class SetParcelItemsChangeModel extends JsonObjectModel implements SetParcelItemsChange
{

    public const DISCRIMINATOR_VALUE = 'SetParcelItemsChange';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $change;

    /**
     * @var ?ParcelChangeValue
     */
    protected $parcel;

    /**
     * @var ?DeliveryItemCollection
     */
    protected $nextValue;

    /**
     * @var ?DeliveryItemCollection
     */
    protected $previousValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?ParcelChangeValue $parcel = null,
        ?DeliveryItemCollection $nextValue = null,
        ?DeliveryItemCollection $previousValue = null
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
     * <p>Update action for <code>setParcelItems</code></p>
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

            $this->parcel =  ParcelChangeValueModel::of($data);
        }

        return $this->parcel;
    }

    /**
     * @return null|DeliveryItemCollection
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->nextValue =  DeliveryItemCollection::fromArray($data);
        }

        return $this->nextValue;
    }

    /**
     * @return null|DeliveryItemCollection
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->previousValue =  DeliveryItemCollection::fromArray($data);
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
     * @param ?ParcelChangeValue $parcel
     */
    public function setParcel(?ParcelChangeValue $parcel): void
    {
        $this->parcel = $parcel;
    }

    /**
     * @param ?DeliveryItemCollection $nextValue
     */
    public function setNextValue(?DeliveryItemCollection $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?DeliveryItemCollection $previousValue
     */
    public function setPreviousValue(?DeliveryItemCollection $previousValue): void
    {
        $this->previousValue = $previousValue;
    }



}
