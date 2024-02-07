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
 * @extends MessageCollection<DiscountCodeKeySetMessage>
 * @method DiscountCodeKeySetMessage current()
 * @method DiscountCodeKeySetMessage end()
 * @method DiscountCodeKeySetMessage at($offset)
 */
class DiscountCodeKeySetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert DiscountCodeKeySetMessage $value
     * @psalm-param DiscountCodeKeySetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeKeySetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeKeySetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeKeySetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountCodeKeySetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountCodeKeySetMessage $data */
                $data = DiscountCodeKeySetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
