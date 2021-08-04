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
 * @extends FieldTypeCollection<CustomFieldLocalizedEnumType>
 * @method CustomFieldLocalizedEnumType current()
 * @method CustomFieldLocalizedEnumType at($offset)
 */
class CustomFieldLocalizedEnumTypeCollection extends FieldTypeCollection
{
    /**
     * @psalm-assert CustomFieldLocalizedEnumType $value
     * @psalm-param CustomFieldLocalizedEnumType|stdClass $value
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
        return function (?int $index): ?CustomFieldLocalizedEnumType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomFieldLocalizedEnumType $data */
                $data = CustomFieldLocalizedEnumTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
