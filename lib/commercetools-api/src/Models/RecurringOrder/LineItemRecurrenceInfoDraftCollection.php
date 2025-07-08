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
 * @extends MapperSequence<LineItemRecurrenceInfoDraft>
 * @method LineItemRecurrenceInfoDraft current()
 * @method LineItemRecurrenceInfoDraft end()
 * @method LineItemRecurrenceInfoDraft at($offset)
 */
class LineItemRecurrenceInfoDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert LineItemRecurrenceInfoDraft $value
     * @psalm-param LineItemRecurrenceInfoDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LineItemRecurrenceInfoDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof LineItemRecurrenceInfoDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LineItemRecurrenceInfoDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?LineItemRecurrenceInfoDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var LineItemRecurrenceInfoDraft $data */
                $data = LineItemRecurrenceInfoDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
