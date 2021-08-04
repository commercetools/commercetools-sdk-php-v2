<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Api\Models\Type\FieldTypeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends FieldTypeCollection<CustomFieldNumberType>
 * @method CustomFieldNumberType current()
 * @method CustomFieldNumberType end()
 * @method CustomFieldNumberType at($offset)
 */
class CustomFieldNumberTypeCollection extends FieldTypeCollection
{
    /**
     * @psalm-assert CustomFieldNumberType $value
     * @psalm-param CustomFieldNumberType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomFieldNumberTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomFieldNumberType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomFieldNumberType
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomFieldNumberType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomFieldNumberType $data */
                $data = CustomFieldNumberTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
