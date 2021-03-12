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
 * @extends MapperSequence<AddAddressAction>
 * @method AddAddressAction current()
 * @method AddAddressAction at($offset)
 */
class AddAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddAddressAction $value
     * @psalm-param AddAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
