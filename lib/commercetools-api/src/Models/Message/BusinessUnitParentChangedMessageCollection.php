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
 * @extends MessageCollection<BusinessUnitParentChangedMessage>
 * @method BusinessUnitParentChangedMessage current()
 * @method BusinessUnitParentChangedMessage end()
 * @method BusinessUnitParentChangedMessage at($offset)
 */
class BusinessUnitParentChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitParentChangedMessage $value
     * @psalm-param BusinessUnitParentChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitParentChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitParentChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitParentChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitParentChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitParentChangedMessage $data */
                $data = BusinessUnitParentChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
