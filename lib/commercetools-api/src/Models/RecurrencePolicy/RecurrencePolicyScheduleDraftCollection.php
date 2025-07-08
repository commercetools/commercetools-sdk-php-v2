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
 * @template T of RecurrencePolicyScheduleDraft
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method RecurrencePolicyScheduleDraft current()
 * @method RecurrencePolicyScheduleDraft end()
 * @method RecurrencePolicyScheduleDraft at($offset)
 */
class RecurrencePolicyScheduleDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurrencePolicyScheduleDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurrencePolicyScheduleDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurrencePolicyScheduleDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = RecurrencePolicyScheduleDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
