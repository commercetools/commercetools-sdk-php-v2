<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Errors;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<VariantValues>
 * @method VariantValues current()
 * @method VariantValues at($offset)
 */
class VariantValuesCollection extends MapperSequence
{
    /**
     * @psalm-assert VariantValues $value
     * @psalm-param VariantValues|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantValuesCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantValues) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantValues
     */
    protected function mapper()
    {
        return function (int $index): ?VariantValues {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = VariantValuesModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
