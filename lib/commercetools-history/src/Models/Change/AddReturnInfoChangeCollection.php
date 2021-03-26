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
 * @extends MapperSequence<AddReturnInfoChange>
 * @method AddReturnInfoChange current()
 * @method AddReturnInfoChange at($offset)
 */
class AddReturnInfoChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert AddReturnInfoChange $value
     * @psalm-param AddReturnInfoChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddReturnInfoChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddReturnInfoChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddReturnInfoChange
     */
    protected function mapper()
    {
        return function (int $index): ?AddReturnInfoChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddReturnInfoChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
