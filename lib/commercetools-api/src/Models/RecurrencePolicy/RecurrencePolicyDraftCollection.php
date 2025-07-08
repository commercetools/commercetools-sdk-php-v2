<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<RecurrencePolicyDraft>
 * @method RecurrencePolicyDraft current()
 * @method RecurrencePolicyDraft end()
 * @method RecurrencePolicyDraft at($offset)
 */
class RecurrencePolicyDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert RecurrencePolicyDraft $value
     * @psalm-param RecurrencePolicyDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurrencePolicyDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurrencePolicyDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurrencePolicyDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurrencePolicyDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurrencePolicyDraft $data */
                $data = RecurrencePolicyDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
