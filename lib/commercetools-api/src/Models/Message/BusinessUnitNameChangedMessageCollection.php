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
 * @extends MessageCollection<BusinessUnitNameChangedMessage>
 * @method BusinessUnitNameChangedMessage current()
 * @method BusinessUnitNameChangedMessage end()
 * @method BusinessUnitNameChangedMessage at($offset)
 */
class BusinessUnitNameChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitNameChangedMessage $value
     * @psalm-param BusinessUnitNameChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitNameChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitNameChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitNameChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitNameChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitNameChangedMessage $data */
                $data = BusinessUnitNameChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
