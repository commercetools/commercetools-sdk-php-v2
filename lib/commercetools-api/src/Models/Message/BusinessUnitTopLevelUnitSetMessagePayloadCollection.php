<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<BusinessUnitTopLevelUnitSetMessagePayload>
 * @method BusinessUnitTopLevelUnitSetMessagePayload current()
 * @method BusinessUnitTopLevelUnitSetMessagePayload end()
 * @method BusinessUnitTopLevelUnitSetMessagePayload at($offset)
 */
class BusinessUnitTopLevelUnitSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitTopLevelUnitSetMessagePayload $value
     * @psalm-param BusinessUnitTopLevelUnitSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitTopLevelUnitSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitTopLevelUnitSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitTopLevelUnitSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitTopLevelUnitSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitTopLevelUnitSetMessagePayload $data */
                $data = BusinessUnitTopLevelUnitSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
