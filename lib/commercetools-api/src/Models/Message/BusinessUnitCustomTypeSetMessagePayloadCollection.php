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
 * @extends MessagePayloadCollection<BusinessUnitCustomTypeSetMessagePayload>
 * @method BusinessUnitCustomTypeSetMessagePayload current()
 * @method BusinessUnitCustomTypeSetMessagePayload end()
 * @method BusinessUnitCustomTypeSetMessagePayload at($offset)
 */
class BusinessUnitCustomTypeSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitCustomTypeSetMessagePayload $value
     * @psalm-param BusinessUnitCustomTypeSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitCustomTypeSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitCustomTypeSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitCustomTypeSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitCustomTypeSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitCustomTypeSetMessagePayload $data */
                $data = BusinessUnitCustomTypeSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
