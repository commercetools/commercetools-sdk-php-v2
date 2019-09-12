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
 * @extends MapperSequence<ResourceCreationError>
 *
 * @method ResourceCreationError current()
 * @method ResourceCreationError at($offset)
 */
class ResourceCreationErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert ResourceCreationError $value
     * @psalm-param ResourceCreationError|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ResourceCreationErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ResourceCreationError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ResourceCreationError
     */
    protected function mapper()
    {
        return function (int $index): ?ResourceCreationError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ResourceCreationErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
