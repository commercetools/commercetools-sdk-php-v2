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
 * @extends MapperSequence<SetDefaultBillingAddressAction>
 * @method SetDefaultBillingAddressAction current()
 * @method SetDefaultBillingAddressAction at($offset)
 */
class SetDefaultBillingAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetDefaultBillingAddressAction $value
     * @psalm-param SetDefaultBillingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDefaultBillingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDefaultBillingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDefaultBillingAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetDefaultBillingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetDefaultBillingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
