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
 * @extends FieldTypeCollection<CustomFieldEnumType>
 * @method CustomFieldEnumType current()
 * @method CustomFieldEnumType at($offset)
 */
class CustomFieldEnumTypeCollection extends FieldTypeCollection
{
    /**
     * @psalm-assert CustomFieldEnumType $value
     * @psalm-param CustomFieldEnumType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomFieldEnumTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomFieldEnumType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomFieldEnumType
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomFieldEnumType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomFieldEnumType $data */
                $data = CustomFieldEnumTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
