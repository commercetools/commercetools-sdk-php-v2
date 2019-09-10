<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StagedOrderRemovePaymentAction>
 * @method StagedOrderRemovePaymentAction current()
 * @method StagedOrderRemovePaymentAction at($offset)
 */
class StagedOrderRemovePaymentActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderRemovePaymentAction $value
     * @psalm-param StagedOrderRemovePaymentAction|stdClass $value
     * @return StagedOrderRemovePaymentActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderRemovePaymentAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderRemovePaymentAction
     */
    protected function mapper()
    {
        return function(int $index): ?StagedOrderRemovePaymentAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderRemovePaymentActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}