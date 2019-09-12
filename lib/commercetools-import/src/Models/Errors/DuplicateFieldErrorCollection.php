<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DuplicateFieldError>
 *
 * @method DuplicateFieldError current()
 * @method DuplicateFieldError at($offset)
 */
class DuplicateFieldErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert DuplicateFieldError $value
     * @psalm-param DuplicateFieldError|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return DuplicateFieldErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof DuplicateFieldError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DuplicateFieldError
     */
    protected function mapper()
    {
        return function (int $index): ?DuplicateFieldError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DuplicateFieldErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
