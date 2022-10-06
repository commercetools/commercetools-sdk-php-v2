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
 * @extends MessagePayloadCollection<BusinessUnitDeletedMessagePayload>
 * @method BusinessUnitDeletedMessagePayload current()
 * @method BusinessUnitDeletedMessagePayload end()
 * @method BusinessUnitDeletedMessagePayload at($offset)
 */
class BusinessUnitDeletedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitDeletedMessagePayload $value
     * @psalm-param BusinessUnitDeletedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitDeletedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitDeletedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitDeletedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitDeletedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitDeletedMessagePayload $data */
                $data = BusinessUnitDeletedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
