<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyScheduleDraftCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends RecurrencePolicyScheduleDraftCollection<StandardScheduleDraft>
 * @method StandardScheduleDraft current()
 * @method StandardScheduleDraft end()
 * @method StandardScheduleDraft at($offset)
 */
class StandardScheduleDraftCollection extends RecurrencePolicyScheduleDraftCollection
{
    /**
     * @psalm-assert StandardScheduleDraft $value
     * @psalm-param StandardScheduleDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandardScheduleDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandardScheduleDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandardScheduleDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?StandardScheduleDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandardScheduleDraft $data */
                $data = StandardScheduleDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
