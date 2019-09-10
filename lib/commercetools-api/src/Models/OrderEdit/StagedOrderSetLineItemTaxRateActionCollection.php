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
 * @extends MapperSequence<StagedOrderSetLineItemTaxRateAction>
 * @method StagedOrderSetLineItemTaxRateAction current()
 * @method StagedOrderSetLineItemTaxRateAction at($offset)
 */
class StagedOrderSetLineItemTaxRateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetLineItemTaxRateAction $value
     * @psalm-param StagedOrderSetLineItemTaxRateAction|stdClass $value
     * @return StagedOrderSetLineItemTaxRateActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetLineItemTaxRateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetLineItemTaxRateAction
     */
    protected function mapper()
    {
        return function(int $index): ?StagedOrderSetLineItemTaxRateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetLineItemTaxRateActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}