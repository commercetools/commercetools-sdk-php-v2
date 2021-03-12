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
 * @extends MapperSequence<SetCustomerGroupAction>
 * @method SetCustomerGroupAction current()
 * @method SetCustomerGroupAction at($offset)
 */
class SetCustomerGroupActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCustomerGroupAction $value
     * @psalm-param SetCustomerGroupAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomerGroupActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomerGroupAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomerGroupAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetCustomerGroupAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetCustomerGroupActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
