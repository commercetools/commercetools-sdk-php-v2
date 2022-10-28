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
 * @extends MessagePayloadCollection<BusinessUnitCreatedMessagePayload>
 * @method BusinessUnitCreatedMessagePayload current()
 * @method BusinessUnitCreatedMessagePayload end()
 * @method BusinessUnitCreatedMessagePayload at($offset)
 */
class BusinessUnitCreatedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitCreatedMessagePayload $value
     * @psalm-param BusinessUnitCreatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitCreatedMessagePayload $data */
                $data = BusinessUnitCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
