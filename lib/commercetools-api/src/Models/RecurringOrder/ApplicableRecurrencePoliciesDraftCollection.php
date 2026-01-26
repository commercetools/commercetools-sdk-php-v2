<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurringOrder\RecurringOrderScopeDraftCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends RecurringOrderScopeDraftCollection<ApplicableRecurrencePoliciesDraft>
 * @method ApplicableRecurrencePoliciesDraft current()
 * @method ApplicableRecurrencePoliciesDraft end()
 * @method ApplicableRecurrencePoliciesDraft at($offset)
 */
class ApplicableRecurrencePoliciesDraftCollection extends RecurringOrderScopeDraftCollection
{
    /**
     * @psalm-assert ApplicableRecurrencePoliciesDraft $value
     * @psalm-param ApplicableRecurrencePoliciesDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApplicableRecurrencePoliciesDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApplicableRecurrencePoliciesDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApplicableRecurrencePoliciesDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ApplicableRecurrencePoliciesDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApplicableRecurrencePoliciesDraft $data */
                $data = ApplicableRecurrencePoliciesDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
