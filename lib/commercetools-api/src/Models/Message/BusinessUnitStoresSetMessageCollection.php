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
 * @extends MessageCollection<BusinessUnitStoresSetMessage>
 * @method BusinessUnitStoresSetMessage current()
 * @method BusinessUnitStoresSetMessage end()
 * @method BusinessUnitStoresSetMessage at($offset)
 */
class BusinessUnitStoresSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitStoresSetMessage $value
     * @psalm-param BusinessUnitStoresSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitStoresSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitStoresSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitStoresSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitStoresSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitStoresSetMessage $data */
                $data = BusinessUnitStoresSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
