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
 * @extends MapperSequence<SetAddressChange>
 * @method SetAddressChange current()
 * @method SetAddressChange at($offset)
 */
class SetAddressChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetAddressChange $value
     * @psalm-param SetAddressChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAddressChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAddressChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAddressChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetAddressChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetAddressChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
