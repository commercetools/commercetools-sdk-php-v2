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
 * @extends MessageCollection<BusinessUnitCustomFieldRemovedMessage>
 * @method BusinessUnitCustomFieldRemovedMessage current()
 * @method BusinessUnitCustomFieldRemovedMessage end()
 * @method BusinessUnitCustomFieldRemovedMessage at($offset)
 */
class BusinessUnitCustomFieldRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitCustomFieldRemovedMessage $value
     * @psalm-param BusinessUnitCustomFieldRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitCustomFieldRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitCustomFieldRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitCustomFieldRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitCustomFieldRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitCustomFieldRemovedMessage $data */
                $data = BusinessUnitCustomFieldRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
