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
 * @extends MessageCollection<BusinessUnitStatusChangedMessage>
 * @method BusinessUnitStatusChangedMessage current()
 * @method BusinessUnitStatusChangedMessage end()
 * @method BusinessUnitStatusChangedMessage at($offset)
 */
class BusinessUnitStatusChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitStatusChangedMessage $value
     * @psalm-param BusinessUnitStatusChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitStatusChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitStatusChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitStatusChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitStatusChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitStatusChangedMessage $data */
                $data = BusinessUnitStatusChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
