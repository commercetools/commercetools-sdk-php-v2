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
 * @extends MapperSequence<Change>
 * @method Change current()
 * @method Change at($offset)
 */
class ChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert Change $value
     * @psalm-param Change|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof Change) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Change
     */
    protected function mapper()
    {
        return function (int $index): ?Change {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
