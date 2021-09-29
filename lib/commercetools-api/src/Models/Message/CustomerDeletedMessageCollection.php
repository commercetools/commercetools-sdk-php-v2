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
 * @extends MessageCollection<CustomerDeletedMessage>
 * @method CustomerDeletedMessage current()
 * @method CustomerDeletedMessage end()
 * @method CustomerDeletedMessage at($offset)
 */
class CustomerDeletedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerDeletedMessage $value
     * @psalm-param CustomerDeletedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerDeletedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerDeletedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerDeletedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerDeletedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerDeletedMessage $data */
                $data = CustomerDeletedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
