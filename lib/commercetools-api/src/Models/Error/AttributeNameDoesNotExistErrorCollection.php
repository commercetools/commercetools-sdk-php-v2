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
 * @extends MapperSequence<AttributeNameDoesNotExistError>
 * @method AttributeNameDoesNotExistError current()
 * @method AttributeNameDoesNotExistError at($offset)
 */
class AttributeNameDoesNotExistErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert AttributeNameDoesNotExistError $value
     * @psalm-param AttributeNameDoesNotExistError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeNameDoesNotExistErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeNameDoesNotExistError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeNameDoesNotExistError
     */
    protected function mapper()
    {
        return function (int $index): ?AttributeNameDoesNotExistError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AttributeNameDoesNotExistErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
