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
 * @implements Builder<RemoveBillingAddressIdChange>
 */
final class RemoveBillingAddressIdChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?array
     */
    private $previousValue;

    /**

     * @var ?array
     */
    private $nextValue;

    /**

     * @var null|Address|AddressBuilder
     */
    private $address;

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

     * @return null|array
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|array
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * <p>Address removed from <code>billingAddressesIds</code>.</p>
     *

     * @return null|Address
     */
    public function getAddress()
    {
        return $this->address instanceof AddressBuilder ? $this->address->build() : $this->address;
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
     * @param ?array $previousValue
     * @return $this
     */
    public function withPreviousValue(?array $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?array $nextValue
     * @return $this
     */
    public function withNextValue(?array $nextValue)
    {
        $this->nextValue = $nextValue;

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
     * @deprecated use withAddress() instead
     * @return $this
     */
    public function withAddressBuilder(?AddressBuilder $address)
    {
        $this->address = $address;

        return $this;
    }

    public function build(): RemoveBillingAddressIdChange
    {
        return new RemoveBillingAddressIdChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue,
            $this->address instanceof AddressBuilder ? $this->address->build() : $this->address
        );
    }

    public static function of(): RemoveBillingAddressIdChangeBuilder
    {
        return new self();
    }
}
