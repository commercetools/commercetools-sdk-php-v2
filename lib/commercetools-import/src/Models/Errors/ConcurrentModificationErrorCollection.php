<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ConcurrentModificationError>
 * @method ConcurrentModificationError current()
 * @method ConcurrentModificationError at($offset)
 */
class ConcurrentModificationErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert ConcurrentModificationError $value
     * @psalm-param ConcurrentModificationError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ConcurrentModificationErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ConcurrentModificationError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ConcurrentModificationError
     */
    protected function mapper()
    {
        return function (int $index): ?ConcurrentModificationError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ConcurrentModificationErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
