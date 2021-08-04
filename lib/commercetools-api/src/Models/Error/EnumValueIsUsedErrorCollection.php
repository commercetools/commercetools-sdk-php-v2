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
 * @extends ErrorObjectCollection<EnumValueIsUsedError>
 * @method EnumValueIsUsedError current()
 * @method EnumValueIsUsedError end()
 * @method EnumValueIsUsedError at($offset)
 */
class EnumValueIsUsedErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert EnumValueIsUsedError $value
     * @psalm-param EnumValueIsUsedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return EnumValueIsUsedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof EnumValueIsUsedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?EnumValueIsUsedError
     */
    protected function mapper()
    {
        return function (?int $index): ?EnumValueIsUsedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var EnumValueIsUsedError $data */
                $data = EnumValueIsUsedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
