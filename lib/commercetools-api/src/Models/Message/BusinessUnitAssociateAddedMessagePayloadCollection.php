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
 * @extends MessagePayloadCollection<BusinessUnitAssociateAddedMessagePayload>
 * @method BusinessUnitAssociateAddedMessagePayload current()
 * @method BusinessUnitAssociateAddedMessagePayload end()
 * @method BusinessUnitAssociateAddedMessagePayload at($offset)
 */
class BusinessUnitAssociateAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitAssociateAddedMessagePayload $value
     * @psalm-param BusinessUnitAssociateAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAssociateAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAssociateAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAssociateAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAssociateAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAssociateAddedMessagePayload $data */
                $data = BusinessUnitAssociateAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
