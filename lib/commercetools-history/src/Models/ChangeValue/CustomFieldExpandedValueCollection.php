<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomFieldExpandedValue>
 * @method CustomFieldExpandedValue current()
 * @method CustomFieldExpandedValue at($offset)
 */
class CustomFieldExpandedValueCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomFieldExpandedValue $value
     * @psalm-param CustomFieldExpandedValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomFieldExpandedValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomFieldExpandedValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomFieldExpandedValue
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomFieldExpandedValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomFieldExpandedValue $data */
                $data = CustomFieldExpandedValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
