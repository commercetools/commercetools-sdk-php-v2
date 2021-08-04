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
 * @template T of ErrorObject
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method ErrorObject current()
 * @method ErrorObject end()
 * @method ErrorObject at($offset)
 */
class ErrorObjectCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ErrorObjectCollection
     */
    public function add($value)
    {
        if (!$value instanceof ErrorObject) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?ErrorObject {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = ErrorObjectModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
