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
 * @extends MapperSequence<DiscountCodeSetMaxApplicationsAction>
 *
 * @method DiscountCodeSetMaxApplicationsAction current()
 * @method DiscountCodeSetMaxApplicationsAction at($offset)
 */
class DiscountCodeSetMaxApplicationsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountCodeSetMaxApplicationsAction $value
     * @psalm-param DiscountCodeSetMaxApplicationsAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeSetMaxApplicationsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeSetMaxApplicationsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeSetMaxApplicationsAction
     */
    protected function mapper()
    {
        return function (int $index): ?DiscountCodeSetMaxApplicationsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DiscountCodeSetMaxApplicationsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
