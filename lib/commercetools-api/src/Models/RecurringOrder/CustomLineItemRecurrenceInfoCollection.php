<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomLineItemRecurrenceInfo>
 * @method CustomLineItemRecurrenceInfo current()
 * @method CustomLineItemRecurrenceInfo end()
 * @method CustomLineItemRecurrenceInfo at($offset)
 */
class CustomLineItemRecurrenceInfoCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomLineItemRecurrenceInfo $value
     * @psalm-param CustomLineItemRecurrenceInfo|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomLineItemRecurrenceInfoCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomLineItemRecurrenceInfo) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomLineItemRecurrenceInfo
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomLineItemRecurrenceInfo {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomLineItemRecurrenceInfo $data */
                $data = CustomLineItemRecurrenceInfoModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
