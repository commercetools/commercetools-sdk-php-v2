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
 * @extends MapperSequence<EnumKeyDoesNotExistError>
 * @method EnumKeyDoesNotExistError current()
 * @method EnumKeyDoesNotExistError at($offset)
 */
class EnumKeyDoesNotExistErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert EnumKeyDoesNotExistError $value
     * @psalm-param EnumKeyDoesNotExistError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return EnumKeyDoesNotExistErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof EnumKeyDoesNotExistError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?EnumKeyDoesNotExistError
     */
    protected function mapper()
    {
        return function (int $index): ?EnumKeyDoesNotExistError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = EnumKeyDoesNotExistErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
