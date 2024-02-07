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
 * @extends MessageCollection<DiscountCodeDeletedMessage>
 * @method DiscountCodeDeletedMessage current()
 * @method DiscountCodeDeletedMessage end()
 * @method DiscountCodeDeletedMessage at($offset)
 */
class DiscountCodeDeletedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert DiscountCodeDeletedMessage $value
     * @psalm-param DiscountCodeDeletedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeDeletedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeDeletedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeDeletedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountCodeDeletedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountCodeDeletedMessage $data */
                $data = DiscountCodeDeletedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
