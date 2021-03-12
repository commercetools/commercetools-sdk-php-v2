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
 * @extends MapperSequence<AddDeliveryAction>
 * @method AddDeliveryAction current()
 * @method AddDeliveryAction at($offset)
 */
class AddDeliveryActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddDeliveryAction $value
     * @psalm-param AddDeliveryAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddDeliveryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddDeliveryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddDeliveryAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddDeliveryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddDeliveryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
