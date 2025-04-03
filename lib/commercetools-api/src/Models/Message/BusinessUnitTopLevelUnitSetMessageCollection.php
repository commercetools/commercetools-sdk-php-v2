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
 * @extends MessageCollection<BusinessUnitTopLevelUnitSetMessage>
 * @method BusinessUnitTopLevelUnitSetMessage current()
 * @method BusinessUnitTopLevelUnitSetMessage end()
 * @method BusinessUnitTopLevelUnitSetMessage at($offset)
 */
class BusinessUnitTopLevelUnitSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitTopLevelUnitSetMessage $value
     * @psalm-param BusinessUnitTopLevelUnitSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitTopLevelUnitSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitTopLevelUnitSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitTopLevelUnitSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitTopLevelUnitSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitTopLevelUnitSetMessage $data */
                $data = BusinessUnitTopLevelUnitSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
