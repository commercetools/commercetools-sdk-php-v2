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
 * @extends MapperSequence<SetExpectedDeliveryChange>
 * @method SetExpectedDeliveryChange current()
 * @method SetExpectedDeliveryChange at($offset)
 */
class SetExpectedDeliveryChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetExpectedDeliveryChange $value
     * @psalm-param SetExpectedDeliveryChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetExpectedDeliveryChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetExpectedDeliveryChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetExpectedDeliveryChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetExpectedDeliveryChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetExpectedDeliveryChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
