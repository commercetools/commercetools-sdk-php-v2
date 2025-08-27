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
 * @extends MessageCollection<DiscountGroupIsActiveSetMessage>
 * @method DiscountGroupIsActiveSetMessage current()
 * @method DiscountGroupIsActiveSetMessage end()
 * @method DiscountGroupIsActiveSetMessage at($offset)
 */
class DiscountGroupIsActiveSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert DiscountGroupIsActiveSetMessage $value
     * @psalm-param DiscountGroupIsActiveSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountGroupIsActiveSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountGroupIsActiveSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountGroupIsActiveSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountGroupIsActiveSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountGroupIsActiveSetMessage $data */
                $data = DiscountGroupIsActiveSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
