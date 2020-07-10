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
 * @extends MapperSequence<DuplicateVariantValuesError>
 * @method DuplicateVariantValuesError current()
 * @method DuplicateVariantValuesError at($offset)
 */
class DuplicateVariantValuesErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert DuplicateVariantValuesError $value
     * @psalm-param DuplicateVariantValuesError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DuplicateVariantValuesErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof DuplicateVariantValuesError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DuplicateVariantValuesError
     */
    protected function mapper()
    {
        return function (int $index): ?DuplicateVariantValuesError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DuplicateVariantValuesErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
