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
use Commercetools\History\Models\Common\StoreCountryCollection;

/**
 * @internal
 */
final class SetCountriesChangeModel extends JsonObjectModel implements SetCountriesChange
{

    public const DISCRIMINATOR_VALUE = 'SetCountriesChange';
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
     * @var ?StoreCountryCollection
     */
    protected $previousValue;

    /**
     *
     * @var ?StoreCountryCollection
     */
    protected $nextValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?StoreCountryCollection $previousValue = null,
        ?StoreCountryCollection $nextValue = null,
        ?string $type = null
    ) {
        $this->change = $change;
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
     * <p>Update action for <code>setCountries</code>.</p>
     *
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
     * <p>Countries defined for the Store prior to the update action.</p>
     *
     *
     * @return null|StoreCountryCollection
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->previousValue = StoreCountryCollection::fromArray($data);
        }

        return $this->previousValue;
    }

    /**
     * <p>Countries defined for the Store after the update action.</p>
     *
     *
     * @return null|StoreCountryCollection
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->nextValue = StoreCountryCollection::fromArray($data);
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
     * @param ?StoreCountryCollection $previousValue
     */
    public function setPreviousValue(?StoreCountryCollection $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?StoreCountryCollection $nextValue
     */
    public function setNextValue(?StoreCountryCollection $nextValue): void
    {
        $this->nextValue = $nextValue;
    }



}
