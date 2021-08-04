<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Customer\CustomerUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends CustomerUpdateActionCollection<CustomerSetCompanyNameAction>
 * @method CustomerSetCompanyNameAction current()
 * @method CustomerSetCompanyNameAction end()
 * @method CustomerSetCompanyNameAction at($offset)
 */
class CustomerSetCompanyNameActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerSetCompanyNameAction $value
     * @psalm-param CustomerSetCompanyNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetCompanyNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetCompanyNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetCompanyNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerSetCompanyNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerSetCompanyNameAction $data */
                $data = CustomerSetCompanyNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
