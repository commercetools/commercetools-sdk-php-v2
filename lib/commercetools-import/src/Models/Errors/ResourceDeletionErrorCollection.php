<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Errors;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ResourceDeletionError>
 * @method ResourceDeletionError current()
 * @method ResourceDeletionError at($offset)
 */
class ResourceDeletionErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert ResourceDeletionError $value
     * @psalm-param ResourceDeletionError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ResourceDeletionErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ResourceDeletionError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ResourceDeletionError
     */
    protected function mapper()
    {
        return function (int $index): ?ResourceDeletionError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ResourceDeletionErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
