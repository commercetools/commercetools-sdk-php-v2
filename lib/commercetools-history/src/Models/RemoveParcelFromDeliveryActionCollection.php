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
 * @extends MapperSequence<RemoveParcelFromDeliveryAction>
 * @method RemoveParcelFromDeliveryAction current()
 * @method RemoveParcelFromDeliveryAction at($offset)
 */
class RemoveParcelFromDeliveryActionCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveParcelFromDeliveryAction $value
     * @psalm-param RemoveParcelFromDeliveryAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveParcelFromDeliveryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveParcelFromDeliveryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveParcelFromDeliveryAction
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveParcelFromDeliveryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveParcelFromDeliveryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
