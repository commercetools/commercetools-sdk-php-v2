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
 * @extends MapperSequence<StagedOrderSetCustomLineItemTaxRateAction>
 * @method StagedOrderSetCustomLineItemTaxRateAction current()
 * @method StagedOrderSetCustomLineItemTaxRateAction at($offset)
 */
class StagedOrderSetCustomLineItemTaxRateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetCustomLineItemTaxRateAction $value
     * @psalm-param StagedOrderSetCustomLineItemTaxRateAction|stdClass $value
     * @return StagedOrderSetCustomLineItemTaxRateActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetCustomLineItemTaxRateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetCustomLineItemTaxRateAction
     */
    protected function mapper()
    {
        return function(int $index): ?StagedOrderSetCustomLineItemTaxRateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetCustomLineItemTaxRateActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}