<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Errors\ErrorObjectCollection;
use stdClass;

/**
 * @extends ErrorObjectCollection<DuplicateVariantValuesError>
 * @method DuplicateVariantValuesError current()
 * @method DuplicateVariantValuesError end()
 * @method DuplicateVariantValuesError at($offset)
 */
class DuplicateVariantValuesErrorCollection extends ErrorObjectCollection
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
        return function (?int $index): ?DuplicateVariantValuesError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DuplicateVariantValuesError $data */
                $data = DuplicateVariantValuesErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
