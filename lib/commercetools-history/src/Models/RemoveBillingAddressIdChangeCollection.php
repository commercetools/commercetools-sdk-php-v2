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
 * @extends MapperSequence<RemoveBillingAddressIdChange>
 * @method RemoveBillingAddressIdChange current()
 * @method RemoveBillingAddressIdChange at($offset)
 */
class RemoveBillingAddressIdChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveBillingAddressIdChange $value
     * @psalm-param RemoveBillingAddressIdChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveBillingAddressIdChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveBillingAddressIdChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveBillingAddressIdChange
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveBillingAddressIdChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveBillingAddressIdChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
