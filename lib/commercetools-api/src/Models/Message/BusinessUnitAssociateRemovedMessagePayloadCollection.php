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
 * @extends MessagePayloadCollection<BusinessUnitAssociateRemovedMessagePayload>
 * @method BusinessUnitAssociateRemovedMessagePayload current()
 * @method BusinessUnitAssociateRemovedMessagePayload end()
 * @method BusinessUnitAssociateRemovedMessagePayload at($offset)
 */
class BusinessUnitAssociateRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitAssociateRemovedMessagePayload $value
     * @psalm-param BusinessUnitAssociateRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAssociateRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAssociateRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAssociateRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAssociateRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAssociateRemovedMessagePayload $data */
                $data = BusinessUnitAssociateRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
