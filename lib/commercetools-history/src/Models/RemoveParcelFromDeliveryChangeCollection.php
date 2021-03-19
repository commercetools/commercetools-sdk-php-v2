<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<RemoveParcelFromDeliveryChange>
 * @method RemoveParcelFromDeliveryChange current()
 * @method RemoveParcelFromDeliveryChange at($offset)
 */
class RemoveParcelFromDeliveryChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveParcelFromDeliveryChange $value
     * @psalm-param RemoveParcelFromDeliveryChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveParcelFromDeliveryChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveParcelFromDeliveryChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveParcelFromDeliveryChange
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveParcelFromDeliveryChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveParcelFromDeliveryChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
