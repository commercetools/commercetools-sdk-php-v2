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
 * @extends FieldTypeCollection<CustomFieldBooleanType>
 * @method CustomFieldBooleanType current()
 * @method CustomFieldBooleanType at($offset)
 */
class CustomFieldBooleanTypeCollection extends FieldTypeCollection
{
    /**
     * @psalm-assert CustomFieldBooleanType $value
     * @psalm-param CustomFieldBooleanType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomFieldBooleanTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomFieldBooleanType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomFieldBooleanType
     */
    protected function mapper()
    {
        return function (int $index): ?CustomFieldBooleanType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomFieldBooleanType $data */
                $data = CustomFieldBooleanTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
