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
 * @extends MapperSequence<CustomLineItemRecurrenceInfoDraft>
 * @method CustomLineItemRecurrenceInfoDraft current()
 * @method CustomLineItemRecurrenceInfoDraft end()
 * @method CustomLineItemRecurrenceInfoDraft at($offset)
 */
class CustomLineItemRecurrenceInfoDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomLineItemRecurrenceInfoDraft $value
     * @psalm-param CustomLineItemRecurrenceInfoDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomLineItemRecurrenceInfoDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomLineItemRecurrenceInfoDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomLineItemRecurrenceInfoDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomLineItemRecurrenceInfoDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomLineItemRecurrenceInfoDraft $data */
                $data = CustomLineItemRecurrenceInfoDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
