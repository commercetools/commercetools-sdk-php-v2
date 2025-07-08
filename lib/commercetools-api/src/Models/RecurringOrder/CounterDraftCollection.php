<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurringOrder\SkipConfigurationDraftCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends SkipConfigurationDraftCollection<CounterDraft>
 * @method CounterDraft current()
 * @method CounterDraft end()
 * @method CounterDraft at($offset)
 */
class CounterDraftCollection extends SkipConfigurationDraftCollection
{
    /**
     * @psalm-assert CounterDraft $value
     * @psalm-param CounterDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CounterDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof CounterDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CounterDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?CounterDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CounterDraft $data */
                $data = CounterDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
