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
 * @extends MessageCollection<BusinessUnitTypeSetMessage>
 * @method BusinessUnitTypeSetMessage current()
 * @method BusinessUnitTypeSetMessage end()
 * @method BusinessUnitTypeSetMessage at($offset)
 */
class BusinessUnitTypeSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitTypeSetMessage $value
     * @psalm-param BusinessUnitTypeSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitTypeSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitTypeSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitTypeSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitTypeSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitTypeSetMessage $data */
                $data = BusinessUnitTypeSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
