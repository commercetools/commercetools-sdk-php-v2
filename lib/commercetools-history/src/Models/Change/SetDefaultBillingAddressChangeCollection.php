<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetDefaultBillingAddressChange>
 * @method SetDefaultBillingAddressChange current()
 * @method SetDefaultBillingAddressChange at($offset)
 */
class SetDefaultBillingAddressChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetDefaultBillingAddressChange $value
     * @psalm-param SetDefaultBillingAddressChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDefaultBillingAddressChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDefaultBillingAddressChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDefaultBillingAddressChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetDefaultBillingAddressChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetDefaultBillingAddressChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
