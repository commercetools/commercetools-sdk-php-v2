<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<RemoveBillingAddressIdChange>
 * @method RemoveBillingAddressIdChange current()
 * @method RemoveBillingAddressIdChange at($offset)
 */
class RemoveBillingAddressIdChangeCollection extends ChangeCollection
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
        return function (?int $index): ?RemoveBillingAddressIdChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemoveBillingAddressIdChange $data */
                $data = RemoveBillingAddressIdChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
