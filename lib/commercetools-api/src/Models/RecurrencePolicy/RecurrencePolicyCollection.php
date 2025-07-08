<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<RecurrencePolicy>
 * @method RecurrencePolicy current()
 * @method RecurrencePolicy end()
 * @method RecurrencePolicy at($offset)
 */
class RecurrencePolicyCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert RecurrencePolicy $value
     * @psalm-param RecurrencePolicy|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurrencePolicyCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurrencePolicy) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurrencePolicy
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurrencePolicy {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurrencePolicy $data */
                $data = RecurrencePolicyModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
