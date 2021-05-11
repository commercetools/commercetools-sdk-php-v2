<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Errors\ErrorObjectCollection;
use stdClass;

/**
 * @extends ErrorObjectCollection<ResourceCreationError>
 * @method ResourceCreationError current()
 * @method ResourceCreationError at($offset)
 */
class ResourceCreationErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert ResourceCreationError $value
     * @psalm-param ResourceCreationError|stdClass $value
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
                /** @var ResourceCreationError $data */
                $data = ResourceCreationErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
