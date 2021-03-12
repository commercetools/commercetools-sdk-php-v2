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
 * @extends MapperSequence<SetBillingAddressAction>
 * @method SetBillingAddressAction current()
 * @method SetBillingAddressAction at($offset)
 */
class SetBillingAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetBillingAddressAction $value
     * @psalm-param SetBillingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetBillingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetBillingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetBillingAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetBillingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetBillingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
