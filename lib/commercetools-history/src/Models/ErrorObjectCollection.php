<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ErrorObject>
 * @method ErrorObject current()
 * @method ErrorObject end()
 * @method ErrorObject at($offset)
 */
class ErrorObjectCollection extends MapperSequence
{
    /**
     * @psalm-assert ErrorObject $value
     * @psalm-param ErrorObject|stdClass $value
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
     * @psalm-return callable(int):?ErrorObject
     */
    protected function mapper()
    {
        return function (?int $index): ?ErrorObject {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ErrorObject $data */
                $data = ErrorObjectModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
