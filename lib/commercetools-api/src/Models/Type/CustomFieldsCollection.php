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
 * @extends MapperSequence<CustomFields>
 *
 * @method CustomFields current()
 * @method CustomFields at($offset)
 */
class CustomFieldsCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomFields $value
     * @psalm-param CustomFields|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CustomFieldsCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomFields) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomFields
     */
    protected function mapper()
    {
        return function (int $index): ?CustomFields {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomFieldsModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
