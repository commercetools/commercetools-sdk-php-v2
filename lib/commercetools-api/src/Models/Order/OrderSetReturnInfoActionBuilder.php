<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderSetReturnInfoAction>
 */
final class OrderSetReturnInfoActionBuilder implements Builder
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


    public function build(): OrderSetReturnInfoAction
    {
        return new OrderSetReturnInfoActionModel(
            $this->items
        );
    }

    public static function of(): OrderSetReturnInfoActionBuilder
    {
        return new self();
    }
}
