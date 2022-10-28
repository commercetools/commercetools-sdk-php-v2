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
 * @extends MessageCollection<BusinessUnitStoreModeChangedMessage>
 * @method BusinessUnitStoreModeChangedMessage current()
 * @method BusinessUnitStoreModeChangedMessage end()
 * @method BusinessUnitStoreModeChangedMessage at($offset)
 */
class BusinessUnitStoreModeChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitStoreModeChangedMessage $value
     * @psalm-param BusinessUnitStoreModeChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitStoreModeChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitStoreModeChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitStoreModeChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitStoreModeChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitStoreModeChangedMessage $data */
                $data = BusinessUnitStoreModeChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
