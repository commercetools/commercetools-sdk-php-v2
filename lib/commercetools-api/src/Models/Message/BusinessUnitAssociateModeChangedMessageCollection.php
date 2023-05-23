<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<BusinessUnitAssociateModeChangedMessage>
 * @method BusinessUnitAssociateModeChangedMessage current()
 * @method BusinessUnitAssociateModeChangedMessage end()
 * @method BusinessUnitAssociateModeChangedMessage at($offset)
 */
class BusinessUnitAssociateModeChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitAssociateModeChangedMessage $value
     * @psalm-param BusinessUnitAssociateModeChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAssociateModeChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAssociateModeChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAssociateModeChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAssociateModeChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAssociateModeChangedMessage $data */
                $data = BusinessUnitAssociateModeChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
