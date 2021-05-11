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
 * @extends MapperSequence<BaseAddress>
 * @method BaseAddress current()
 * @method BaseAddress at($offset)
 */
class BaseAddressCollection extends MapperSequence
{
    /**
     * @psalm-assert BaseAddress $value
     * @psalm-param BaseAddress|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BaseAddressCollection
     */
    public function add($value)
    {
        if (!$value instanceof BaseAddress) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BaseAddress
     */
    protected function mapper()
    {
        return function (int $index): ?BaseAddress {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = BaseAddressModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
