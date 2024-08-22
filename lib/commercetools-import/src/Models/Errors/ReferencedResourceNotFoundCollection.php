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
 * @extends ErrorObjectCollection<ReferencedResourceNotFound>
 * @method ReferencedResourceNotFound current()
 * @method ReferencedResourceNotFound end()
 * @method ReferencedResourceNotFound at($offset)
 */
class ReferencedResourceNotFoundCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert ReferencedResourceNotFound $value
     * @psalm-param ReferencedResourceNotFound|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReferencedResourceNotFoundCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReferencedResourceNotFound) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReferencedResourceNotFound
     */
    protected function mapper()
    {
        return function (?int $index): ?ReferencedResourceNotFound {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReferencedResourceNotFound $data */
                $data = ReferencedResourceNotFoundModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
