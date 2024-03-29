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
 * @extends FieldTypeCollection<CustomFieldStringType>
 * @method CustomFieldStringType current()
 * @method CustomFieldStringType end()
 * @method CustomFieldStringType at($offset)
 */
class CustomFieldStringTypeCollection extends FieldTypeCollection
{
    /**
     * @psalm-assert CustomFieldStringType $value
     * @psalm-param CustomFieldStringType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomFieldStringTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomFieldStringType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomFieldStringType
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomFieldStringType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomFieldStringType $data */
                $data = CustomFieldStringTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
