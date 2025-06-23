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
 * @extends MessageCollection<DiscountGroupCreatedMessage>
 * @method DiscountGroupCreatedMessage current()
 * @method DiscountGroupCreatedMessage end()
 * @method DiscountGroupCreatedMessage at($offset)
 */
class DiscountGroupCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert DiscountGroupCreatedMessage $value
     * @psalm-param DiscountGroupCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountGroupCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountGroupCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountGroupCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountGroupCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountGroupCreatedMessage $data */
                $data = DiscountGroupCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
