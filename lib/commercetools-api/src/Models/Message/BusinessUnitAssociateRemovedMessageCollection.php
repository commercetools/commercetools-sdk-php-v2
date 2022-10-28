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
 * @extends MessageCollection<BusinessUnitAssociateRemovedMessage>
 * @method BusinessUnitAssociateRemovedMessage current()
 * @method BusinessUnitAssociateRemovedMessage end()
 * @method BusinessUnitAssociateRemovedMessage at($offset)
 */
class BusinessUnitAssociateRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitAssociateRemovedMessage $value
     * @psalm-param BusinessUnitAssociateRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAssociateRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAssociateRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAssociateRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAssociateRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAssociateRemovedMessage $data */
                $data = BusinessUnitAssociateRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
