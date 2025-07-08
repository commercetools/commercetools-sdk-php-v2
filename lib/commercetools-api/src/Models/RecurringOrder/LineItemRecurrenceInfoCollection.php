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
 * @extends MapperSequence<LineItemRecurrenceInfo>
 * @method LineItemRecurrenceInfo current()
 * @method LineItemRecurrenceInfo end()
 * @method LineItemRecurrenceInfo at($offset)
 */
class LineItemRecurrenceInfoCollection extends MapperSequence
{
    /**
     * @psalm-assert LineItemRecurrenceInfo $value
     * @psalm-param LineItemRecurrenceInfo|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LineItemRecurrenceInfoCollection
     */
    public function add($value)
    {
        if (!$value instanceof LineItemRecurrenceInfo) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LineItemRecurrenceInfo
     */
    protected function mapper()
    {
        return function (?int $index): ?LineItemRecurrenceInfo {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var LineItemRecurrenceInfo $data */
                $data = LineItemRecurrenceInfoModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
