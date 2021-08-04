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
 * @extends ChangeCollection<RemoveShippingAddressIdChange>
 * @method RemoveShippingAddressIdChange current()
 * @method RemoveShippingAddressIdChange at($offset)
 */
class RemoveShippingAddressIdChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert RemoveShippingAddressIdChange $value
     * @psalm-param RemoveShippingAddressIdChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveShippingAddressIdChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveShippingAddressIdChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveShippingAddressIdChange
     */
    protected function mapper()
    {
        return function (?int $index): ?RemoveShippingAddressIdChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemoveShippingAddressIdChange $data */
                $data = RemoveShippingAddressIdChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
