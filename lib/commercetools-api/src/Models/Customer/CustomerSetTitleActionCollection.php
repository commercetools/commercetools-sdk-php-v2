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
 * @extends CustomerUpdateActionCollection<CustomerSetTitleAction>
 * @method CustomerSetTitleAction current()
 * @method CustomerSetTitleAction at($offset)
 */
class CustomerSetTitleActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerSetTitleAction $value
     * @psalm-param CustomerSetTitleAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetTitleActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetTitleAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetTitleAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerSetTitleAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerSetTitleAction $data */
                $data = CustomerSetTitleActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
