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
 * @extends MessageCollection<DiscountGroupDeletedMessage>
 * @method DiscountGroupDeletedMessage current()
 * @method DiscountGroupDeletedMessage end()
 * @method DiscountGroupDeletedMessage at($offset)
 */
class DiscountGroupDeletedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert DiscountGroupDeletedMessage $value
     * @psalm-param DiscountGroupDeletedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountGroupDeletedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountGroupDeletedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountGroupDeletedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountGroupDeletedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountGroupDeletedMessage $data */
                $data = DiscountGroupDeletedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
