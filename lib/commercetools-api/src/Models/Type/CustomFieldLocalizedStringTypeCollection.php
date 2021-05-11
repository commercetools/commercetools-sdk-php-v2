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
 * @extends FieldTypeCollection<CustomFieldLocalizedStringType>
 * @method CustomFieldLocalizedStringType current()
 * @method CustomFieldLocalizedStringType at($offset)
 */
class CustomFieldLocalizedStringTypeCollection extends FieldTypeCollection
{
    /**
     * @psalm-assert CustomFieldLocalizedStringType $value
     * @psalm-param CustomFieldLocalizedStringType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomFieldLocalizedStringTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomFieldLocalizedStringType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomFieldLocalizedStringType
     */
    protected function mapper()
    {
        return function (int $index): ?CustomFieldLocalizedStringType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomFieldLocalizedStringType $data */
                $data = CustomFieldLocalizedStringTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
