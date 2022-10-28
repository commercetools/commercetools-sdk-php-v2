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
 * @extends MessagePayloadCollection<BusinessUnitStatusChangedMessagePayload>
 * @method BusinessUnitStatusChangedMessagePayload current()
 * @method BusinessUnitStatusChangedMessagePayload end()
 * @method BusinessUnitStatusChangedMessagePayload at($offset)
 */
class BusinessUnitStatusChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitStatusChangedMessagePayload $value
     * @psalm-param BusinessUnitStatusChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitStatusChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitStatusChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitStatusChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitStatusChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitStatusChangedMessagePayload $data */
                $data = BusinessUnitStatusChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
