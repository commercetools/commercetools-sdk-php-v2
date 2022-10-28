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
 * @extends MessageCollection<BusinessUnitAssociatesSetMessage>
 * @method BusinessUnitAssociatesSetMessage current()
 * @method BusinessUnitAssociatesSetMessage end()
 * @method BusinessUnitAssociatesSetMessage at($offset)
 */
class BusinessUnitAssociatesSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitAssociatesSetMessage $value
     * @psalm-param BusinessUnitAssociatesSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAssociatesSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAssociatesSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAssociatesSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAssociatesSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAssociatesSetMessage $data */
                $data = BusinessUnitAssociatesSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
