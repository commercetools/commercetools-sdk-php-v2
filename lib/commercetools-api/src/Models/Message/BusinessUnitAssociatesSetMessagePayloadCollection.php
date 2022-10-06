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
 * @extends MessagePayloadCollection<BusinessUnitAssociatesSetMessagePayload>
 * @method BusinessUnitAssociatesSetMessagePayload current()
 * @method BusinessUnitAssociatesSetMessagePayload end()
 * @method BusinessUnitAssociatesSetMessagePayload at($offset)
 */
class BusinessUnitAssociatesSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitAssociatesSetMessagePayload $value
     * @psalm-param BusinessUnitAssociatesSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAssociatesSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAssociatesSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAssociatesSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAssociatesSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAssociatesSetMessagePayload $data */
                $data = BusinessUnitAssociatesSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
