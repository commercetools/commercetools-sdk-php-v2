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
 * @extends MapperSequence<ReferencedResourceNotFoundError>
 * @method ReferencedResourceNotFoundError current()
 * @method ReferencedResourceNotFoundError at($offset)
 */
class ReferencedResourceNotFoundErrorCollection extends MapperSequence
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
        return function (int $index): ?ReferencedResourceNotFoundError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ReferencedResourceNotFoundErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
