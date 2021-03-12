<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Record>
 * @method Record current()
 * @method Record at($offset)
 */
class RecordCollection extends MapperSequence
{
    /**
     * @psalm-assert Record $value
     * @psalm-param Record|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecordCollection
     */
    public function add($value)
    {
        if (!$value instanceof Record) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Record
     */
    protected function mapper()
    {
        return function (int $index): ?Record {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RecordModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
