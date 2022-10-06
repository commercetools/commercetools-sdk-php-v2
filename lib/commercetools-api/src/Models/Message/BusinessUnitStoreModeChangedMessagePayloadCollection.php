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
 * @extends MessagePayloadCollection<BusinessUnitStoreModeChangedMessagePayload>
 * @method BusinessUnitStoreModeChangedMessagePayload current()
 * @method BusinessUnitStoreModeChangedMessagePayload end()
 * @method BusinessUnitStoreModeChangedMessagePayload at($offset)
 */
class BusinessUnitStoreModeChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitStoreModeChangedMessagePayload $value
     * @psalm-param BusinessUnitStoreModeChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitStoreModeChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitStoreModeChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitStoreModeChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitStoreModeChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitStoreModeChangedMessagePayload $data */
                $data = BusinessUnitStoreModeChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
