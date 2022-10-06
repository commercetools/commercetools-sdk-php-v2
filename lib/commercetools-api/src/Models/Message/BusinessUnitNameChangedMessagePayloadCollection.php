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
 * @extends MessagePayloadCollection<BusinessUnitNameChangedMessagePayload>
 * @method BusinessUnitNameChangedMessagePayload current()
 * @method BusinessUnitNameChangedMessagePayload end()
 * @method BusinessUnitNameChangedMessagePayload at($offset)
 */
class BusinessUnitNameChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitNameChangedMessagePayload $value
     * @psalm-param BusinessUnitNameChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitNameChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitNameChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitNameChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitNameChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitNameChangedMessagePayload $data */
                $data = BusinessUnitNameChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
