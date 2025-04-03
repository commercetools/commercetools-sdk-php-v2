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
 * @extends MessagePayloadCollection<BusinessUnitTypeSetMessagePayload>
 * @method BusinessUnitTypeSetMessagePayload current()
 * @method BusinessUnitTypeSetMessagePayload end()
 * @method BusinessUnitTypeSetMessagePayload at($offset)
 */
class BusinessUnitTypeSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitTypeSetMessagePayload $value
     * @psalm-param BusinessUnitTypeSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitTypeSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitTypeSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitTypeSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitTypeSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitTypeSetMessagePayload $data */
                $data = BusinessUnitTypeSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
