<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ObjectNotFoundError>
 * @method ObjectNotFoundError current()
 * @method ObjectNotFoundError at($offset)
 */
class ObjectNotFoundErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert ObjectNotFoundError $value
     * @psalm-param ObjectNotFoundError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ObjectNotFoundErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ObjectNotFoundError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ObjectNotFoundError
     */
    protected function mapper()
    {
        return function (int $index): ?ObjectNotFoundError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ObjectNotFoundErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
