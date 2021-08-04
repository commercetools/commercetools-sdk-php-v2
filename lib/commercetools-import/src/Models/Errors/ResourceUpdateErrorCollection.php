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
 * @extends ErrorObjectCollection<ResourceUpdateError>
 * @method ResourceUpdateError current()
 * @method ResourceUpdateError at($offset)
 */
class ResourceUpdateErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert ResourceUpdateError $value
     * @psalm-param ResourceUpdateError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ResourceUpdateErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ResourceUpdateError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ResourceUpdateError
     */
    protected function mapper()
    {
        return function (?int $index): ?ResourceUpdateError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ResourceUpdateError $data */
                $data = ResourceUpdateErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
