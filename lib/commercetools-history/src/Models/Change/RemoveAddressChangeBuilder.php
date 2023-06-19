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
 * @implements Builder<RemoveAddressChange>
 */
final class RemoveAddressChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|Address|AddressBuilder
     */
    private $previousValue;

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

     * @return null|Address
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof AddressBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?Address $previousValue
     * @return $this
     */
    public function withPreviousValue(?Address $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?AddressBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): RemoveAddressChange
    {
        return new RemoveAddressChangeModel(
            $this->change,
            $this->previousValue instanceof AddressBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): RemoveAddressChangeBuilder
    {
        return new self();
    }
}
