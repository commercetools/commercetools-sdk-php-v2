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
 * @extends MessageCollection<BusinessUnitCustomFieldAddedMessage>
 * @method BusinessUnitCustomFieldAddedMessage current()
 * @method BusinessUnitCustomFieldAddedMessage end()
 * @method BusinessUnitCustomFieldAddedMessage at($offset)
 */
class BusinessUnitCustomFieldAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitCustomFieldAddedMessage $value
     * @psalm-param BusinessUnitCustomFieldAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitCustomFieldAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitCustomFieldAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitCustomFieldAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitCustomFieldAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitCustomFieldAddedMessage $data */
                $data = BusinessUnitCustomFieldAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
