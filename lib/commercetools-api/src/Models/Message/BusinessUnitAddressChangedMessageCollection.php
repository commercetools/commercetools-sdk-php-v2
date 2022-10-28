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
 * @extends MessageCollection<BusinessUnitAddressChangedMessage>
 * @method BusinessUnitAddressChangedMessage current()
 * @method BusinessUnitAddressChangedMessage end()
 * @method BusinessUnitAddressChangedMessage at($offset)
 */
class BusinessUnitAddressChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitAddressChangedMessage $value
     * @psalm-param BusinessUnitAddressChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAddressChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAddressChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAddressChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAddressChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAddressChangedMessage $data */
                $data = BusinessUnitAddressChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
