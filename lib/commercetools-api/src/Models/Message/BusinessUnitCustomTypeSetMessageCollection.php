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
 * @extends MessageCollection<BusinessUnitCustomTypeSetMessage>
 * @method BusinessUnitCustomTypeSetMessage current()
 * @method BusinessUnitCustomTypeSetMessage end()
 * @method BusinessUnitCustomTypeSetMessage at($offset)
 */
class BusinessUnitCustomTypeSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitCustomTypeSetMessage $value
     * @psalm-param BusinessUnitCustomTypeSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitCustomTypeSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitCustomTypeSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitCustomTypeSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitCustomTypeSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitCustomTypeSetMessage $data */
                $data = BusinessUnitCustomTypeSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
