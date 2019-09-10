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
 * @extends MapperSequence<CustomFieldLocalizedEnumType>
 *
 * @method CustomFieldLocalizedEnumType current()
 * @method CustomFieldLocalizedEnumType at($offset)
 */
class CustomFieldLocalizedEnumTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomFieldLocalizedEnumType $value
     * @psalm-param CustomFieldLocalizedEnumType|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CustomFieldLocalizedEnumTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomFieldLocalizedEnumType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomFieldLocalizedEnumType
     */
    protected function mapper()
    {
        return function (int $index): ?CustomFieldLocalizedEnumType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomFieldLocalizedEnumTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
