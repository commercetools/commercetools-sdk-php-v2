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
 * @extends MapperSequence<ChangeKeyChange>
 * @method ChangeKeyChange current()
 * @method ChangeKeyChange at($offset)
 */
class ChangeKeyChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeKeyChange $value
     * @psalm-param ChangeKeyChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeKeyChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeKeyChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeKeyChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeKeyChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeKeyChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
