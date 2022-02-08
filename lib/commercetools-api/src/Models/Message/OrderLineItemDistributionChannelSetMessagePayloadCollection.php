<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\OrderMessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderMessagePayloadCollection<OrderLineItemDistributionChannelSetMessagePayload>
 * @method OrderLineItemDistributionChannelSetMessagePayload current()
 * @method OrderLineItemDistributionChannelSetMessagePayload end()
 * @method OrderLineItemDistributionChannelSetMessagePayload at($offset)
 */
class OrderLineItemDistributionChannelSetMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert OrderLineItemDistributionChannelSetMessagePayload $value
     * @psalm-param OrderLineItemDistributionChannelSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderLineItemDistributionChannelSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderLineItemDistributionChannelSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderLineItemDistributionChannelSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderLineItemDistributionChannelSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderLineItemDistributionChannelSetMessagePayload $data */
                $data = OrderLineItemDistributionChannelSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
