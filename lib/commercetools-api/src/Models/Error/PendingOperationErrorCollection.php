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
 * @extends MapperSequence<PendingOperationError>
 * @method PendingOperationError current()
 * @method PendingOperationError at($offset)
 */
class PendingOperationErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert PendingOperationError $value
     * @psalm-param PendingOperationError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PendingOperationErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof PendingOperationError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PendingOperationError
     */
    protected function mapper()
    {
        return function (int $index): ?PendingOperationError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PendingOperationErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
