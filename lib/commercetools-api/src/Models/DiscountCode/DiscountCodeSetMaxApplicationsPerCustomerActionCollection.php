<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Api\Models\DiscountCode\DiscountCodeUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends DiscountCodeUpdateActionCollection<DiscountCodeSetMaxApplicationsPerCustomerAction>
 * @method DiscountCodeSetMaxApplicationsPerCustomerAction current()
 * @method DiscountCodeSetMaxApplicationsPerCustomerAction end()
 * @method DiscountCodeSetMaxApplicationsPerCustomerAction at($offset)
 */
class DiscountCodeSetMaxApplicationsPerCustomerActionCollection extends DiscountCodeUpdateActionCollection
{
    /**
     * @psalm-assert DiscountCodeSetMaxApplicationsPerCustomerAction $value
     * @psalm-param DiscountCodeSetMaxApplicationsPerCustomerAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeSetMaxApplicationsPerCustomerActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeSetMaxApplicationsPerCustomerAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeSetMaxApplicationsPerCustomerAction
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountCodeSetMaxApplicationsPerCustomerAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountCodeSetMaxApplicationsPerCustomerAction $data */
                $data = DiscountCodeSetMaxApplicationsPerCustomerActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
