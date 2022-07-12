<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\CustomLineItem;
use Commercetools\Api\Models\Cart\CustomLineItemBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderCustomLineItemAddedMessagePayload>
 */
final class OrderCustomLineItemAddedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|CustomLineItem|CustomLineItemBuilder
     */
    private $customLineItem;

    /**

     * @return null|CustomLineItem
     */
    public function getCustomLineItem()
    {
        return $this->customLineItem instanceof CustomLineItemBuilder ? $this->customLineItem->build() : $this->customLineItem;
    }

    /**
     * @param ?CustomLineItem $customLineItem
     * @return $this
     */
    public function withCustomLineItem(?CustomLineItem $customLineItem)
    {
        $this->customLineItem = $customLineItem;

        return $this;
    }

    /**
     * @deprecated use withCustomLineItem() instead
     * @return $this
     */
    public function withCustomLineItemBuilder(?CustomLineItemBuilder $customLineItem)
    {
        $this->customLineItem = $customLineItem;

        return $this;
    }

    public function build(): OrderCustomLineItemAddedMessagePayload
    {
        return new OrderCustomLineItemAddedMessagePayloadModel(
            $this->customLineItem instanceof CustomLineItemBuilder ? $this->customLineItem->build() : $this->customLineItem
        );
    }

    public static function of(): OrderCustomLineItemAddedMessagePayloadBuilder
    {
        return new self();
    }
}
