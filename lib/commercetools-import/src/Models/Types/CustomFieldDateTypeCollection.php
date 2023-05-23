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
 * @extends FieldTypeCollection<CustomFieldDateType>
 * @method CustomFieldDateType current()
 * @method CustomFieldDateType end()
 * @method CustomFieldDateType at($offset)
 */
class CustomFieldDateTypeCollection extends FieldTypeCollection
{
    /**
     * @psalm-assert CustomFieldDateType $value
     * @psalm-param CustomFieldDateType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomFieldDateTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomFieldDateType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomFieldDateType
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomFieldDateType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomFieldDateType $data */
                $data = CustomFieldDateTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
