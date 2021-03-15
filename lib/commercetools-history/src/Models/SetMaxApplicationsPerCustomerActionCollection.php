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
 * @extends MapperSequence<SetMaxApplicationsPerCustomerAction>
 * @method SetMaxApplicationsPerCustomerAction current()
 * @method SetMaxApplicationsPerCustomerAction at($offset)
 */
class SetMaxApplicationsPerCustomerActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetMaxApplicationsPerCustomerAction $value
     * @psalm-param SetMaxApplicationsPerCustomerAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMaxApplicationsPerCustomerActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMaxApplicationsPerCustomerAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMaxApplicationsPerCustomerAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetMaxApplicationsPerCustomerAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetMaxApplicationsPerCustomerActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
