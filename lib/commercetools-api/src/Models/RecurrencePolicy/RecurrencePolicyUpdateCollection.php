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
 * @extends MapperSequence<RecurrencePolicyUpdate>
 * @method RecurrencePolicyUpdate current()
 * @method RecurrencePolicyUpdate end()
 * @method RecurrencePolicyUpdate at($offset)
 */
class RecurrencePolicyUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert RecurrencePolicyUpdate $value
     * @psalm-param RecurrencePolicyUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurrencePolicyUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurrencePolicyUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurrencePolicyUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurrencePolicyUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurrencePolicyUpdate $data */
                $data = RecurrencePolicyUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
