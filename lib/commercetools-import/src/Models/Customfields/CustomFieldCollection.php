<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Customfields;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomField>
 * @method CustomField current()
 * @method CustomField at($offset)
 */
class CustomFieldCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomField $value
     * @psalm-param CustomField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomField
     */
    protected function mapper()
    {
        return function (int $index): ?CustomField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
