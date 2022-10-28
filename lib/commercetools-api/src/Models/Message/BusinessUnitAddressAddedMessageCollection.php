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
 * @extends MessageCollection<BusinessUnitAddressAddedMessage>
 * @method BusinessUnitAddressAddedMessage current()
 * @method BusinessUnitAddressAddedMessage end()
 * @method BusinessUnitAddressAddedMessage at($offset)
 */
class BusinessUnitAddressAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitAddressAddedMessage $value
     * @psalm-param BusinessUnitAddressAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAddressAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAddressAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAddressAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAddressAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAddressAddedMessage $data */
                $data = BusinessUnitAddressAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
