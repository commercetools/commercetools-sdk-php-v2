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
 * @extends MapperSequence<DuplicateAttributeValueError>
 * @method DuplicateAttributeValueError current()
 * @method DuplicateAttributeValueError at($offset)
 */
class DuplicateAttributeValueErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert DuplicateAttributeValueError $value
     * @psalm-param DuplicateAttributeValueError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DuplicateAttributeValueErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof DuplicateAttributeValueError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DuplicateAttributeValueError
     */
    protected function mapper()
    {
        return function (int $index): ?DuplicateAttributeValueError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DuplicateAttributeValueErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
