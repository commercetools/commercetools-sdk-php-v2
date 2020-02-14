<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<EnumField>
 * @method EnumField current()
 * @method EnumField at($offset)
 */
class EnumFieldCollection extends MapperSequence
{
    /**
     * @psalm-assert EnumField $value
     * @psalm-param EnumField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return EnumFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof EnumField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?EnumField
     */
    protected function mapper()
    {
        return function (int $index): ?EnumField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = EnumFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
