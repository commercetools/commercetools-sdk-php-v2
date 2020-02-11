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
 * @extends MapperSequence<DuplicateFieldWithConflictingResourceError>
 * @method DuplicateFieldWithConflictingResourceError current()
 * @method DuplicateFieldWithConflictingResourceError at($offset)
 */
class DuplicateFieldWithConflictingResourceErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert DuplicateFieldWithConflictingResourceError $value
     * @psalm-param DuplicateFieldWithConflictingResourceError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DuplicateFieldWithConflictingResourceErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof DuplicateFieldWithConflictingResourceError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DuplicateFieldWithConflictingResourceError
     */
    protected function mapper()
    {
        return function (int $index): ?DuplicateFieldWithConflictingResourceError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DuplicateFieldWithConflictingResourceErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
