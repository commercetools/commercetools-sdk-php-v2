<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RemoveAddressAction>
 */
final class RemoveAddressActionBuilder implements Builder
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
     * <p>Update action for <code>removeAddress</code> action.</p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
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
     * @return $this
     */
    public function withPreviousValueBuilder(?AddressBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): RemoveAddressAction
    {
        return new RemoveAddressActionModel(
            $this->change,
            $this->previousValue instanceof AddressBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): RemoveAddressActionBuilder
    {
        return new self();
    }
}
