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
 * @extends MessageCollection<BusinessUnitStoreAddedMessage>
 * @method BusinessUnitStoreAddedMessage current()
 * @method BusinessUnitStoreAddedMessage end()
 * @method BusinessUnitStoreAddedMessage at($offset)
 */
class BusinessUnitStoreAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitStoreAddedMessage $value
     * @psalm-param BusinessUnitStoreAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitStoreAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitStoreAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitStoreAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitStoreAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitStoreAddedMessage $data */
                $data = BusinessUnitStoreAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
