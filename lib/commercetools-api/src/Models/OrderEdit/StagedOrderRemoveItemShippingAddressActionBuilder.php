<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StagedOrderRemoveItemShippingAddressAction>
 */
final class StagedOrderRemoveItemShippingAddressActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $addressKey;

    /**
     * <p><code>key</code> of the Address to remove from <code>itemShippingAddresses</code>.</p>
     *

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


    public function build(): StagedOrderRemoveItemShippingAddressAction
    {
        return new StagedOrderRemoveItemShippingAddressActionModel(
            $this->addressKey
        );
    }

    public static function of(): StagedOrderRemoveItemShippingAddressActionBuilder
    {
        return new self();
    }
}
