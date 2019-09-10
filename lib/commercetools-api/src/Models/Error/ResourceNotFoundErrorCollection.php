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
 * @extends MapperSequence<ResourceNotFoundError>
 *
 * @method ResourceNotFoundError current()
 * @method ResourceNotFoundError at($offset)
 */
class ResourceNotFoundErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert ResourceNotFoundError $value
     * @psalm-param ResourceNotFoundError|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ResourceNotFoundErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ResourceNotFoundError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ResourceNotFoundError
     */
    protected function mapper()
    {
        return function (int $index): ?ResourceNotFoundError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ResourceNotFoundErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
