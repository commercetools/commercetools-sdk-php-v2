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
 * @extends MapperSequence<SetCustomerIdAction>
 * @method SetCustomerIdAction current()
 * @method SetCustomerIdAction at($offset)
 */
class SetCustomerIdActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCustomerIdAction $value
     * @psalm-param SetCustomerIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomerIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomerIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomerIdAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetCustomerIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetCustomerIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
