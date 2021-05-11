<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorObjectCollection<ResourceSizeLimitExceededError>
 * @method ResourceSizeLimitExceededError current()
 * @method ResourceSizeLimitExceededError at($offset)
 */
class ResourceSizeLimitExceededErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert ResourceSizeLimitExceededError $value
     * @psalm-param ResourceSizeLimitExceededError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ResourceSizeLimitExceededErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ResourceSizeLimitExceededError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ResourceSizeLimitExceededError
     */
    protected function mapper()
    {
        return function (int $index): ?ResourceSizeLimitExceededError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ResourceSizeLimitExceededError $data */
                $data = ResourceSizeLimitExceededErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
