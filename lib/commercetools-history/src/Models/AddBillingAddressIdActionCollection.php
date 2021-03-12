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
 * @extends MapperSequence<AddBillingAddressIdAction>
 * @method AddBillingAddressIdAction current()
 * @method AddBillingAddressIdAction at($offset)
 */
class AddBillingAddressIdActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddBillingAddressIdAction $value
     * @psalm-param AddBillingAddressIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddBillingAddressIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddBillingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddBillingAddressIdAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddBillingAddressIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddBillingAddressIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
