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
 * @extends ErrorObjectCollection<ReferencedResourceNotFoundError>
 * @method ReferencedResourceNotFoundError current()
 * @method ReferencedResourceNotFoundError end()
 * @method ReferencedResourceNotFoundError at($offset)
 */
class ReferencedResourceNotFoundErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert ReferencedResourceNotFoundError $value
     * @psalm-param ReferencedResourceNotFoundError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReferencedResourceNotFoundErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReferencedResourceNotFoundError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReferencedResourceNotFoundError
     */
    protected function mapper()
    {
        return function (?int $index): ?ReferencedResourceNotFoundError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReferencedResourceNotFoundError $data */
                $data = ReferencedResourceNotFoundErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
