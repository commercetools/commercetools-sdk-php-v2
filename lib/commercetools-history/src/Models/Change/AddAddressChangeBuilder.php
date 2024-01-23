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
 * @implements Builder<AddAddressChange>
 */
final class AddAddressChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|Address|AddressBuilder
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
     * <p>Value after the change.</p>
     *

     * @return null|Address
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof AddressBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?Address $nextValue
     * @return $this
     */
    public function withNextValue(?Address $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?AddressBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): AddAddressChange
    {
        return new AddAddressChangeModel(
            $this->change,
            $this->nextValue instanceof AddressBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): AddAddressChangeBuilder
    {
        return new self();
    }
}
