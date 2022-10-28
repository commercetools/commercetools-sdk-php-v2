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
 * @extends MessageCollection<BusinessUnitAssociateChangedMessage>
 * @method BusinessUnitAssociateChangedMessage current()
 * @method BusinessUnitAssociateChangedMessage end()
 * @method BusinessUnitAssociateChangedMessage at($offset)
 */
class BusinessUnitAssociateChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitAssociateChangedMessage $value
     * @psalm-param BusinessUnitAssociateChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAssociateChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAssociateChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAssociateChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAssociateChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAssociateChangedMessage $data */
                $data = BusinessUnitAssociateChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
