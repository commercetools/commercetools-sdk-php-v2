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
 * @extends ErrorObjectCollection<EnumKeyAlreadyExistsError>
 * @method EnumKeyAlreadyExistsError current()
 * @method EnumKeyAlreadyExistsError end()
 * @method EnumKeyAlreadyExistsError at($offset)
 */
class EnumKeyAlreadyExistsErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert EnumKeyAlreadyExistsError $value
     * @psalm-param EnumKeyAlreadyExistsError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return EnumKeyAlreadyExistsErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof EnumKeyAlreadyExistsError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?EnumKeyAlreadyExistsError
     */
    protected function mapper()
    {
        return function (?int $index): ?EnumKeyAlreadyExistsError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var EnumKeyAlreadyExistsError $data */
                $data = EnumKeyAlreadyExistsErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
