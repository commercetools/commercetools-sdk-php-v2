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
 * @extends MessageCollection<BusinessUnitContactEmailSetMessage>
 * @method BusinessUnitContactEmailSetMessage current()
 * @method BusinessUnitContactEmailSetMessage end()
 * @method BusinessUnitContactEmailSetMessage at($offset)
 */
class BusinessUnitContactEmailSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitContactEmailSetMessage $value
     * @psalm-param BusinessUnitContactEmailSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitContactEmailSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitContactEmailSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitContactEmailSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitContactEmailSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitContactEmailSetMessage $data */
                $data = BusinessUnitContactEmailSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
