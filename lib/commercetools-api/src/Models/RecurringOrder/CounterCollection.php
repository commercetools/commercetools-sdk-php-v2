<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurringOrder\SkipConfigurationCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends SkipConfigurationCollection<Counter>
 * @method Counter current()
 * @method Counter end()
 * @method Counter at($offset)
 */
class CounterCollection extends SkipConfigurationCollection
{
    /**
     * @psalm-assert Counter $value
     * @psalm-param Counter|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CounterCollection
     */
    public function add($value)
    {
        if (!$value instanceof Counter) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Counter
     */
    protected function mapper()
    {
        return function (?int $index): ?Counter {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Counter $data */
                $data = CounterModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
