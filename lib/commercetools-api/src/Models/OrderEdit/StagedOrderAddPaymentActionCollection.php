<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StagedOrderAddPaymentAction>
 *
 * @method StagedOrderAddPaymentAction current()
 * @method StagedOrderAddPaymentAction at($offset)
 */
class StagedOrderAddPaymentActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderAddPaymentAction $value
     * @psalm-param StagedOrderAddPaymentAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return StagedOrderAddPaymentActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderAddPaymentAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderAddPaymentAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderAddPaymentAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderAddPaymentActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
