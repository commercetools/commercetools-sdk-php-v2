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
 * @extends ChangeCollection<AddShippingAddressIdChange>
 * @method AddShippingAddressIdChange current()
 * @method AddShippingAddressIdChange at($offset)
 */
class AddShippingAddressIdChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert AddShippingAddressIdChange $value
     * @psalm-param AddShippingAddressIdChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddShippingAddressIdChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddShippingAddressIdChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddShippingAddressIdChange
     */
    protected function mapper()
    {
        return function (int $index): ?AddShippingAddressIdChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddShippingAddressIdChange $data */
                $data = AddShippingAddressIdChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
