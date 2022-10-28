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
 * @extends MessageCollection<BusinessUnitAssociateAddedMessage>
 * @method BusinessUnitAssociateAddedMessage current()
 * @method BusinessUnitAssociateAddedMessage end()
 * @method BusinessUnitAssociateAddedMessage at($offset)
 */
class BusinessUnitAssociateAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitAssociateAddedMessage $value
     * @psalm-param BusinessUnitAssociateAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAssociateAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAssociateAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAssociateAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAssociateAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAssociateAddedMessage $data */
                $data = BusinessUnitAssociateAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
