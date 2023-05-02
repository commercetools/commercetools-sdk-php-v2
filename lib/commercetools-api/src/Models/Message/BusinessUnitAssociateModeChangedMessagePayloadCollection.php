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
 * @extends MessagePayloadCollection<BusinessUnitAssociateModeChangedMessagePayload>
 * @method BusinessUnitAssociateModeChangedMessagePayload current()
 * @method BusinessUnitAssociateModeChangedMessagePayload end()
 * @method BusinessUnitAssociateModeChangedMessagePayload at($offset)
 */
class BusinessUnitAssociateModeChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitAssociateModeChangedMessagePayload $value
     * @psalm-param BusinessUnitAssociateModeChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAssociateModeChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAssociateModeChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAssociateModeChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAssociateModeChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAssociateModeChangedMessagePayload $data */
                $data = BusinessUnitAssociateModeChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
