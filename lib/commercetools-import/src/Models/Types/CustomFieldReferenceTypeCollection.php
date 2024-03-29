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
 * @extends FieldTypeCollection<CustomFieldReferenceType>
 * @method CustomFieldReferenceType current()
 * @method CustomFieldReferenceType end()
 * @method CustomFieldReferenceType at($offset)
 */
class CustomFieldReferenceTypeCollection extends FieldTypeCollection
{
    /**
     * @psalm-assert CustomFieldReferenceType $value
     * @psalm-param CustomFieldReferenceType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomFieldReferenceTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomFieldReferenceType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomFieldReferenceType
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomFieldReferenceType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomFieldReferenceType $data */
                $data = CustomFieldReferenceTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
