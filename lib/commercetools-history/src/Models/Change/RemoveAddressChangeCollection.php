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
 * @extends MapperSequence<RemoveAddressChange>
 * @method RemoveAddressChange current()
 * @method RemoveAddressChange at($offset)
 */
class RemoveAddressChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveAddressChange $value
     * @psalm-param RemoveAddressChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveAddressChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveAddressChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveAddressChange
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveAddressChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveAddressChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
