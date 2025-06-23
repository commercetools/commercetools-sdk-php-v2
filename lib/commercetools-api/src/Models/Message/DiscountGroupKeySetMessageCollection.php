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
 * @extends MessageCollection<DiscountGroupKeySetMessage>
 * @method DiscountGroupKeySetMessage current()
 * @method DiscountGroupKeySetMessage end()
 * @method DiscountGroupKeySetMessage at($offset)
 */
class DiscountGroupKeySetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert DiscountGroupKeySetMessage $value
     * @psalm-param DiscountGroupKeySetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountGroupKeySetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountGroupKeySetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountGroupKeySetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountGroupKeySetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountGroupKeySetMessage $data */
                $data = DiscountGroupKeySetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
