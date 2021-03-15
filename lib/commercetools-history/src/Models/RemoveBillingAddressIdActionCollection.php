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
 * @extends MapperSequence<RemoveBillingAddressIdAction>
 * @method RemoveBillingAddressIdAction current()
 * @method RemoveBillingAddressIdAction at($offset)
 */
class RemoveBillingAddressIdActionCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveBillingAddressIdAction $value
     * @psalm-param RemoveBillingAddressIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveBillingAddressIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveBillingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveBillingAddressIdAction
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveBillingAddressIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveBillingAddressIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
