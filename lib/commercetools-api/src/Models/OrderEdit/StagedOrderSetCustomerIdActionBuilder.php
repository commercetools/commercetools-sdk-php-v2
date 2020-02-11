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
 * @implements Builder<StagedOrderSetCustomerIdAction>
 */
final class StagedOrderSetCustomerIdActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $customerId;

    /**
     * @return null|string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @return $this
     */
    public function withCustomerId(?string $customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }


    public function build(): StagedOrderSetCustomerIdAction
    {
        return new StagedOrderSetCustomerIdActionModel(
            $this->customerId
        );
    }

    public static function of(): StagedOrderSetCustomerIdActionBuilder
    {
        return new self();
    }
}
