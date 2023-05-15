<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Types;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Types\FieldTypeCollection;
use stdClass;

/**
 * @extends FieldTypeCollection<CustomFieldSetType>
 * @method CustomFieldSetType current()
 * @method CustomFieldSetType end()
 * @method CustomFieldSetType at($offset)
 */
class CustomFieldSetTypeCollection extends FieldTypeCollection
{
    /**
     * @psalm-assert CustomFieldSetType $value
     * @psalm-param CustomFieldSetType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomFieldSetTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomFieldSetType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomFieldSetType
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomFieldSetType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomFieldSetType $data */
                $data = CustomFieldSetTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
