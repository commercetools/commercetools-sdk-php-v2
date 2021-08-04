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
 * @extends ErrorObjectCollection<DuplicateAttributeValuesError>
 * @method DuplicateAttributeValuesError current()
 * @method DuplicateAttributeValuesError at($offset)
 */
class DuplicateAttributeValuesErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert DuplicateAttributeValuesError $value
     * @psalm-param DuplicateAttributeValuesError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DuplicateAttributeValuesErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof DuplicateAttributeValuesError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DuplicateAttributeValuesError
     */
    protected function mapper()
    {
        return function (?int $index): ?DuplicateAttributeValuesError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DuplicateAttributeValuesError $data */
                $data = DuplicateAttributeValuesErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
