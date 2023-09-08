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
 * @extends MessageCollection<BusinessUnitAddressCustomTypeSetMessage>
 * @method BusinessUnitAddressCustomTypeSetMessage current()
 * @method BusinessUnitAddressCustomTypeSetMessage end()
 * @method BusinessUnitAddressCustomTypeSetMessage at($offset)
 */
class BusinessUnitAddressCustomTypeSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitAddressCustomTypeSetMessage $value
     * @psalm-param BusinessUnitAddressCustomTypeSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAddressCustomTypeSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAddressCustomTypeSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAddressCustomTypeSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAddressCustomTypeSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAddressCustomTypeSetMessage $data */
                $data = BusinessUnitAddressCustomTypeSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
