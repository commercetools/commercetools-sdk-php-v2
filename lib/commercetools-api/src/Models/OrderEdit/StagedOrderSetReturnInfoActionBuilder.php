<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\ReturnInfoDraftCollection;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StagedOrderSetReturnInfoAction>
 */
final class StagedOrderSetReturnInfoActionBuilder implements Builder
{
    /**
     * @var ?ReturnInfoDraftCollection
     */
    private $items;

    /**
     * @return null|ReturnInfoDraftCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param ?ReturnInfoDraftCollection $items
     * @return $this
     */
    public function withItems(?ReturnInfoDraftCollection $items)
    {
        $this->items = $items;

        return $this;
    }


    public function build(): StagedOrderSetReturnInfoAction
    {
        return new StagedOrderSetReturnInfoActionModel(
            $this->items
        );
    }

    public static function of(): StagedOrderSetReturnInfoActionBuilder
    {
        return new self();
    }
}
