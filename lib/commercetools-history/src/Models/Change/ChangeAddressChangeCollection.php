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
 * @extends MapperSequence<ChangeAddressChange>
 * @method ChangeAddressChange current()
 * @method ChangeAddressChange at($offset)
 */
class ChangeAddressChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeAddressChange $value
     * @psalm-param ChangeAddressChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeAddressChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeAddressChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeAddressChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeAddressChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeAddressChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
