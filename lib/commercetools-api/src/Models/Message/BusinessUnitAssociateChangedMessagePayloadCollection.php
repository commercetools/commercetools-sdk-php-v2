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
 * @extends MessagePayloadCollection<BusinessUnitAssociateChangedMessagePayload>
 * @method BusinessUnitAssociateChangedMessagePayload current()
 * @method BusinessUnitAssociateChangedMessagePayload end()
 * @method BusinessUnitAssociateChangedMessagePayload at($offset)
 */
class BusinessUnitAssociateChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitAssociateChangedMessagePayload $value
     * @psalm-param BusinessUnitAssociateChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAssociateChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAssociateChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAssociateChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAssociateChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAssociateChangedMessagePayload $data */
                $data = BusinessUnitAssociateChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
