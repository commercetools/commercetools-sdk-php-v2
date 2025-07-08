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
 * @template T of RecurrencePolicySchedule
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method RecurrencePolicySchedule current()
 * @method RecurrencePolicySchedule end()
 * @method RecurrencePolicySchedule at($offset)
 */
class RecurrencePolicyScheduleCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurrencePolicyScheduleCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurrencePolicySchedule) {
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
        return function (?int $index): ?RecurrencePolicySchedule {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = RecurrencePolicyScheduleModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
