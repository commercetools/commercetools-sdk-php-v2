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
 * @extends MessageCollection<BusinessUnitCustomFieldChangedMessage>
 * @method BusinessUnitCustomFieldChangedMessage current()
 * @method BusinessUnitCustomFieldChangedMessage end()
 * @method BusinessUnitCustomFieldChangedMessage at($offset)
 */
class BusinessUnitCustomFieldChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitCustomFieldChangedMessage $value
     * @psalm-param BusinessUnitCustomFieldChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitCustomFieldChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitCustomFieldChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitCustomFieldChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitCustomFieldChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitCustomFieldChangedMessage $data */
                $data = BusinessUnitCustomFieldChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
