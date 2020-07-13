<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyCartRemoveItemShippingAddressAction>
 */
final class MyCartRemoveItemShippingAddressActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $addressKey;

    /**
     * @return null|string
     */
    public function getAddressKey()
    {
        return $this->addressKey;
    }

    /**
     * @param ?string $addressKey
     * @return $this
     */
    public function withAddressKey(?string $addressKey)
    {
        $this->addressKey = $addressKey;

        return $this;
    }


    public function build(): MyCartRemoveItemShippingAddressAction
    {
        return new MyCartRemoveItemShippingAddressActionModel(
            $this->addressKey
        );
    }

    public static function of(): MyCartRemoveItemShippingAddressActionBuilder
    {
        return new self();
    }
}
