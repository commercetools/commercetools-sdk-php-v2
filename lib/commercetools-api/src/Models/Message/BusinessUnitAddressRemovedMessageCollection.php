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
 * @extends MessageCollection<BusinessUnitAddressRemovedMessage>
 * @method BusinessUnitAddressRemovedMessage current()
 * @method BusinessUnitAddressRemovedMessage end()
 * @method BusinessUnitAddressRemovedMessage at($offset)
 */
class BusinessUnitAddressRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitAddressRemovedMessage $value
     * @psalm-param BusinessUnitAddressRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAddressRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAddressRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAddressRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAddressRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAddressRemovedMessage $data */
                $data = BusinessUnitAddressRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
