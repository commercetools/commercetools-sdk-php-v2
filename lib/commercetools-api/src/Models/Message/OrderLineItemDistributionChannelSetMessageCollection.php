<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<OrderLineItemDistributionChannelSetMessage>
 * @method OrderLineItemDistributionChannelSetMessage current()
 * @method OrderLineItemDistributionChannelSetMessage end()
 * @method OrderLineItemDistributionChannelSetMessage at($offset)
 */
class OrderLineItemDistributionChannelSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert OrderLineItemDistributionChannelSetMessage $value
     * @psalm-param OrderLineItemDistributionChannelSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderLineItemDistributionChannelSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderLineItemDistributionChannelSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderLineItemDistributionChannelSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderLineItemDistributionChannelSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderLineItemDistributionChannelSetMessage $data */
                $data = OrderLineItemDistributionChannelSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
