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
use Commercetools\History\Models\Common\Address;
use Commercetools\History\Models\Common\AddressModel;

/**
 * @internal
 */
final class SetAddressCustomFieldChangeModel extends JsonObjectModel implements SetAddressCustomFieldChange
{

    public const DISCRIMINATOR_VALUE = 'SetAddressCustomFieldChange';
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
     * @var ?Address
     */
    protected $address;

    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?string
     */
    protected $customTypeId;

    /**
     *
     * @var ?mixed
     */
    protected $previousValue;

    /**
     *
     * @var ?mixed
     */
    protected $nextValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?Address $address = null,
        ?string $name = null,
        ?string $customTypeId = null,
         $previousValue = null,
         $nextValue = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->address = $address;
        $this->name = $name;
        $this->customTypeId = $customTypeId;
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
     * <p><a href="ctp:api:type:Address">Address</a> which was extended.</p>
     *
     *
     * @return null|Address
     */
    public function getAddress()
    {
        if (is_null($this->address)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->address = AddressModel::of($data);
        }

        return $this->address;
    }

    /**
     * <p>Name of the <a href="ctp:api:type:CustomFields">Custom Field</a>.</p>
     *
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p><code>id</code> of the referenced <a href="ctp:api:type:Type">Type</a>.</p>
     *
     *
     * @return null|string
     */
    public function getCustomTypeId()
    {
        if (is_null($this->customTypeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CUSTOM_TYPE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->customTypeId = (string) $data;
        }

        return $this->customTypeId;
    }

    /**
     * <p>Value before the change.</p>
     *
     *
     * @return null|mixed
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->previousValue = $data;
        }

        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *
     *
     * @return null|mixed
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->nextValue = $data;
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
     * @param ?Address $address
     */
    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?string $customTypeId
     */
    public function setCustomTypeId(?string $customTypeId): void
    {
        $this->customTypeId = $customTypeId;
    }

    /**
     * @param mixed $previousValue
     */
    public function setPreviousValue( $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param mixed $nextValue
     */
    public function setNextValue( $nextValue): void
    {
        $this->nextValue = $nextValue;
    }



}
