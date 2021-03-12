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
 * @extends MapperSequence<SetCustomerEmailAction>
 * @method SetCustomerEmailAction current()
 * @method SetCustomerEmailAction at($offset)
 */
class SetCustomerEmailActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCustomerEmailAction $value
     * @psalm-param SetCustomerEmailAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomerEmailActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomerEmailAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomerEmailAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetCustomerEmailAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetCustomerEmailActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
