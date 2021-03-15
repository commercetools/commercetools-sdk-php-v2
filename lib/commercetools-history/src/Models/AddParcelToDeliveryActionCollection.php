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
 * @extends MapperSequence<AddParcelToDeliveryAction>
 * @method AddParcelToDeliveryAction current()
 * @method AddParcelToDeliveryAction at($offset)
 */
class AddParcelToDeliveryActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddParcelToDeliveryAction $value
     * @psalm-param AddParcelToDeliveryAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddParcelToDeliveryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddParcelToDeliveryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddParcelToDeliveryAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddParcelToDeliveryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddParcelToDeliveryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
