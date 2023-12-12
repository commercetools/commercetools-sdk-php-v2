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
 * @extends MessageCollection<BusinessUnitAddressCustomFieldAddedMessage>
 * @method BusinessUnitAddressCustomFieldAddedMessage current()
 * @method BusinessUnitAddressCustomFieldAddedMessage end()
 * @method BusinessUnitAddressCustomFieldAddedMessage at($offset)
 */
class BusinessUnitAddressCustomFieldAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitAddressCustomFieldAddedMessage $value
     * @psalm-param BusinessUnitAddressCustomFieldAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAddressCustomFieldAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAddressCustomFieldAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAddressCustomFieldAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAddressCustomFieldAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAddressCustomFieldAddedMessage $data */
                $data = BusinessUnitAddressCustomFieldAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
