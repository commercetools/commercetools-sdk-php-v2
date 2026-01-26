<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurringOrder\RecurringOrderScopeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends RecurringOrderScopeCollection<ApplicableRecurrencePolicies>
 * @method ApplicableRecurrencePolicies current()
 * @method ApplicableRecurrencePolicies end()
 * @method ApplicableRecurrencePolicies at($offset)
 */
class ApplicableRecurrencePoliciesCollection extends RecurringOrderScopeCollection
{
    /**
     * @psalm-assert ApplicableRecurrencePolicies $value
     * @psalm-param ApplicableRecurrencePolicies|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApplicableRecurrencePoliciesCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApplicableRecurrencePolicies) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApplicableRecurrencePolicies
     */
    protected function mapper()
    {
        return function (?int $index): ?ApplicableRecurrencePolicies {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApplicableRecurrencePolicies $data */
                $data = ApplicableRecurrencePoliciesModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
