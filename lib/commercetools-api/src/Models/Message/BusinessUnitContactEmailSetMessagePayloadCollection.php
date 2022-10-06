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
 * @extends MessagePayloadCollection<BusinessUnitContactEmailSetMessagePayload>
 * @method BusinessUnitContactEmailSetMessagePayload current()
 * @method BusinessUnitContactEmailSetMessagePayload end()
 * @method BusinessUnitContactEmailSetMessagePayload at($offset)
 */
class BusinessUnitContactEmailSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitContactEmailSetMessagePayload $value
     * @psalm-param BusinessUnitContactEmailSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitContactEmailSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitContactEmailSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitContactEmailSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitContactEmailSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitContactEmailSetMessagePayload $data */
                $data = BusinessUnitContactEmailSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
