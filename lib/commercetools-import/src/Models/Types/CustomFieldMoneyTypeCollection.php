<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Types;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Types\FieldTypeCollection;
use stdClass;

/**
 * @extends FieldTypeCollection<CustomFieldMoneyType>
 * @method CustomFieldMoneyType current()
 * @method CustomFieldMoneyType end()
 * @method CustomFieldMoneyType at($offset)
 */
class CustomFieldMoneyTypeCollection extends FieldTypeCollection
{
    /**
     * @psalm-assert CustomFieldMoneyType $value
     * @psalm-param CustomFieldMoneyType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomFieldMoneyTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomFieldMoneyType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomFieldMoneyType
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomFieldMoneyType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomFieldMoneyType $data */
                $data = CustomFieldMoneyTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
