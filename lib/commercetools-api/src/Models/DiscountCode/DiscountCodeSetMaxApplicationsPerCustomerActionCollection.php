<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DiscountCodeSetMaxApplicationsPerCustomerAction>
 *
 * @method DiscountCodeSetMaxApplicationsPerCustomerAction current()
 * @method DiscountCodeSetMaxApplicationsPerCustomerAction at($offset)
 */
class DiscountCodeSetMaxApplicationsPerCustomerActionCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountCodeSetMaxApplicationsPerCustomerAction $value
     * @psalm-param DiscountCodeSetMaxApplicationsPerCustomerAction|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?DiscountCodeSetMaxApplicationsPerCustomerAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DiscountCodeSetMaxApplicationsPerCustomerActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
