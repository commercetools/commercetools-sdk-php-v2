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
 * @extends ChangeCollection<AddAddressChange>
 * @method AddAddressChange current()
 * @method AddAddressChange end()
 * @method AddAddressChange at($offset)
 */
class AddAddressChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert AddAddressChange $value
     * @psalm-param AddAddressChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddAddressChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddAddressChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddAddressChange
     */
    protected function mapper()
    {
        return function (?int $index): ?AddAddressChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddAddressChange $data */
                $data = AddAddressChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
