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
 * @extends MapperSequence<DuplicateEnumValuesError>
 * @method DuplicateEnumValuesError current()
 * @method DuplicateEnumValuesError at($offset)
 */
class DuplicateEnumValuesErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert DuplicateEnumValuesError $value
     * @psalm-param DuplicateEnumValuesError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DuplicateEnumValuesErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof DuplicateEnumValuesError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DuplicateEnumValuesError
     */
    protected function mapper()
    {
        return function (int $index): ?DuplicateEnumValuesError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DuplicateEnumValuesErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
