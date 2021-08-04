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
 * @extends FieldTypeCollection<CustomFieldDateTimeType>
 * @method CustomFieldDateTimeType current()
 * @method CustomFieldDateTimeType at($offset)
 */
class CustomFieldDateTimeTypeCollection extends FieldTypeCollection
{
    /**
     * @psalm-assert CustomFieldDateTimeType $value
     * @psalm-param CustomFieldDateTimeType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomFieldDateTimeTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomFieldDateTimeType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomFieldDateTimeType
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomFieldDateTimeType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomFieldDateTimeType $data */
                $data = CustomFieldDateTimeTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
