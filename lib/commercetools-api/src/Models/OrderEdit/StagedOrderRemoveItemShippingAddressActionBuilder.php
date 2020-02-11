<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;

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
     * @return null|string
     */
    public function getAddressKey()
    {
        return $this->addressKey;
    }

    /**
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
