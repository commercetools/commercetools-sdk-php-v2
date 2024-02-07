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
 * @extends MessageCollection<DiscountCodeCreatedMessage>
 * @method DiscountCodeCreatedMessage current()
 * @method DiscountCodeCreatedMessage end()
 * @method DiscountCodeCreatedMessage at($offset)
 */
class DiscountCodeCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert DiscountCodeCreatedMessage $value
     * @psalm-param DiscountCodeCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountCodeCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountCodeCreatedMessage $data */
                $data = DiscountCodeCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
