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
 * @extends MessageCollection<BusinessUnitCreatedMessage>
 * @method BusinessUnitCreatedMessage current()
 * @method BusinessUnitCreatedMessage end()
 * @method BusinessUnitCreatedMessage at($offset)
 */
class BusinessUnitCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitCreatedMessage $value
     * @psalm-param BusinessUnitCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitCreatedMessage $data */
                $data = BusinessUnitCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
