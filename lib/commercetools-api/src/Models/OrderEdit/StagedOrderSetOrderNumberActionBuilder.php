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
 * @implements Builder<StagedOrderSetOrderNumberAction>
 */
final class StagedOrderSetOrderNumberActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $orderNumber;

    /**
     * <p>Value to set. Must be unique across a Project.
     * Once set, the value cannot be changed.</p>
     *

     * @return null|string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @param ?string $orderNumber
     * @return $this
     */
    public function withOrderNumber(?string $orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }


    public function build(): StagedOrderSetOrderNumberAction
    {
        return new StagedOrderSetOrderNumberActionModel(
            $this->orderNumber
        );
    }

    public static function of(): StagedOrderSetOrderNumberActionBuilder
    {
        return new self();
    }
}
