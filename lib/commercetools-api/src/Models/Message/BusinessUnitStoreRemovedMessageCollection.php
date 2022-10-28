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
 * @extends MessageCollection<BusinessUnitStoreRemovedMessage>
 * @method BusinessUnitStoreRemovedMessage current()
 * @method BusinessUnitStoreRemovedMessage end()
 * @method BusinessUnitStoreRemovedMessage at($offset)
 */
class BusinessUnitStoreRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitStoreRemovedMessage $value
     * @psalm-param BusinessUnitStoreRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitStoreRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitStoreRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitStoreRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitStoreRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitStoreRemovedMessage $data */
                $data = BusinessUnitStoreRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
