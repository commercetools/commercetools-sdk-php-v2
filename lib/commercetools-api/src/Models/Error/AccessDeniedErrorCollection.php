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
 * @extends MapperSequence<AccessDeniedError>
 *
 * @method AccessDeniedError current()
 * @method AccessDeniedError at($offset)
 */
class AccessDeniedErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert AccessDeniedError $value
     * @psalm-param AccessDeniedError|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return AccessDeniedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AccessDeniedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AccessDeniedError
     */
    protected function mapper()
    {
        return function (int $index): ?AccessDeniedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AccessDeniedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
