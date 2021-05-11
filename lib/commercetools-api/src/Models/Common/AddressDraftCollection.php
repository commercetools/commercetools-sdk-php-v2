<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AddressDraft>
 * @method AddressDraft current()
 * @method AddressDraft at($offset)
 */
class AddressDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert AddressDraft $value
     * @psalm-param AddressDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddressDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddressDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddressDraft
     */
    protected function mapper()
    {
        return function (int $index): ?AddressDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddressDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
