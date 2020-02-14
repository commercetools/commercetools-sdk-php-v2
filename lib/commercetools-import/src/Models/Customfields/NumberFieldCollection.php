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
 * @extends MapperSequence<NumberField>
 * @method NumberField current()
 * @method NumberField at($offset)
 */
class NumberFieldCollection extends MapperSequence
{
    /**
     * @psalm-assert NumberField $value
     * @psalm-param NumberField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return NumberFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof NumberField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?NumberField
     */
    protected function mapper()
    {
        return function (int $index): ?NumberField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = NumberFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
