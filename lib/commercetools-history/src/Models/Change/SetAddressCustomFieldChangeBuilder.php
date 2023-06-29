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
use Commercetools\History\Models\Common\Address;
use Commercetools\History\Models\Common\AddressBuilder;

/**
 * @implements Builder<SetAddressCustomFieldChange>
 */
final class SetAddressCustomFieldChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|Address|AddressBuilder
     */
    private $address;

    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?string
     */
    private $customTypeId;

    /**

     * @var null|mixed|mixed
     */
    private $previousValue;

    /**

     * @var null|mixed|mixed
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
     * <p><a href="ctp:api:type:Address">Address</a> which was extended.</p>
     *

     * @return null|Address
     */
    public function getAddress()
    {
        return $this->address instanceof AddressBuilder ? $this->address->build() : $this->address;
    }

    /**
     * <p>Name of the <a href="ctp:api:type:CustomFields">Custom Field</a>.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p><code>id</code> of the referenced <a href="ctp:api:type:Type">Type</a>.</p>
     *

     * @return null|string
     */
    public function getCustomTypeId()
    {
        return $this->customTypeId;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|mixed
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|mixed
     */
    public function getNextValue()
    {
        return $this->nextValue;
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
     * @param ?Address $address
     * @return $this
     */
    public function withAddress(?Address $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?string $customTypeId
     * @return $this
     */
    public function withCustomTypeId(?string $customTypeId)
    {
        $this->customTypeId = $customTypeId;

        return $this;
    }

    /**
     * @param mixed $previousValue
     * @return $this
     */
    public function withPreviousValue( $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param mixed $nextValue
     * @return $this
     */
    public function withNextValue( $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withAddress() instead
     * @return $this
     */
    public function withAddressBuilder(?AddressBuilder $address)
    {
        $this->address = $address;

        return $this;
    }

    public function build(): SetAddressCustomFieldChange
    {
        return new SetAddressCustomFieldChangeModel(
            $this->change,
            $this->address instanceof AddressBuilder ? $this->address->build() : $this->address,
            $this->name,
            $this->customTypeId,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): SetAddressCustomFieldChangeBuilder
    {
        return new self();
    }
}
