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
 * @extends MessagePayloadCollection<BusinessUnitParentChangedMessagePayload>
 * @method BusinessUnitParentChangedMessagePayload current()
 * @method BusinessUnitParentChangedMessagePayload end()
 * @method BusinessUnitParentChangedMessagePayload at($offset)
 */
class BusinessUnitParentChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitParentChangedMessagePayload $value
     * @psalm-param BusinessUnitParentChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitParentChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitParentChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitParentChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitParentChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitParentChangedMessagePayload $data */
                $data = BusinessUnitParentChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
