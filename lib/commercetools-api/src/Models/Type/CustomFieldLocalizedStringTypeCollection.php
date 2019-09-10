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
 * @extends MapperSequence<CustomFieldLocalizedStringType>
 *
 * @method CustomFieldLocalizedStringType current()
 * @method CustomFieldLocalizedStringType at($offset)
 */
class CustomFieldLocalizedStringTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomFieldLocalizedStringType $value
     * @psalm-param CustomFieldLocalizedStringType|stdClass $value
     *
     * @param mixed $value
     *
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
                $data = CustomFieldLocalizedStringTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
