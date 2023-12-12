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
 * @extends MessageCollection<BusinessUnitAddressCustomFieldChangedMessage>
 * @method BusinessUnitAddressCustomFieldChangedMessage current()
 * @method BusinessUnitAddressCustomFieldChangedMessage end()
 * @method BusinessUnitAddressCustomFieldChangedMessage at($offset)
 */
class BusinessUnitAddressCustomFieldChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitAddressCustomFieldChangedMessage $value
     * @psalm-param BusinessUnitAddressCustomFieldChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAddressCustomFieldChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAddressCustomFieldChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAddressCustomFieldChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAddressCustomFieldChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAddressCustomFieldChangedMessage $data */
                $data = BusinessUnitAddressCustomFieldChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
