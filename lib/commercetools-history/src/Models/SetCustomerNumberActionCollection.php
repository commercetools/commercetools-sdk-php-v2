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
 * @extends MapperSequence<SetCustomerNumberAction>
 * @method SetCustomerNumberAction current()
 * @method SetCustomerNumberAction at($offset)
 */
class SetCustomerNumberActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCustomerNumberAction $value
     * @psalm-param SetCustomerNumberAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomerNumberActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomerNumberAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomerNumberAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetCustomerNumberAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetCustomerNumberActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
