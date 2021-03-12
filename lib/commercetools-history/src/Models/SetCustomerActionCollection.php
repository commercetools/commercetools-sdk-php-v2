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
 * @extends MapperSequence<SetCustomerAction>
 * @method SetCustomerAction current()
 * @method SetCustomerAction at($offset)
 */
class SetCustomerActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCustomerAction $value
     * @psalm-param SetCustomerAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomerActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomerAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomerAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetCustomerAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetCustomerActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
