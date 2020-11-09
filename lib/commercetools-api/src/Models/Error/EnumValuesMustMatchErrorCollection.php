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
 * @extends MapperSequence<EnumValuesMustMatchError>
 * @method EnumValuesMustMatchError current()
 * @method EnumValuesMustMatchError at($offset)
 */
class EnumValuesMustMatchErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert EnumValuesMustMatchError $value
     * @psalm-param EnumValuesMustMatchError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return EnumValuesMustMatchErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof EnumValuesMustMatchError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?EnumValuesMustMatchError
     */
    protected function mapper()
    {
        return function (int $index): ?EnumValuesMustMatchError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = EnumValuesMustMatchErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
