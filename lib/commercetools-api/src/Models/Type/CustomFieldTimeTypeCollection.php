<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomFieldTimeType>
 * @method CustomFieldTimeType current()
 * @method CustomFieldTimeType at($offset)
 */
class CustomFieldTimeTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomFieldTimeType $value
     * @psalm-param CustomFieldTimeType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomFieldTimeTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomFieldTimeType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomFieldTimeType
     */
    protected function mapper()
    {
        return function (int $index): ?CustomFieldTimeType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomFieldTimeTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
