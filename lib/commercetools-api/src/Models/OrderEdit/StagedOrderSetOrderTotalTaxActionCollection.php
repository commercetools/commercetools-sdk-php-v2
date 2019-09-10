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
 * @extends MapperSequence<StagedOrderSetOrderTotalTaxAction>
 * @method StagedOrderSetOrderTotalTaxAction current()
 * @method StagedOrderSetOrderTotalTaxAction at($offset)
 */
class StagedOrderSetOrderTotalTaxActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetOrderTotalTaxAction $value
     * @psalm-param StagedOrderSetOrderTotalTaxAction|stdClass $value
     * @return StagedOrderSetOrderTotalTaxActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetOrderTotalTaxAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetOrderTotalTaxAction
     */
    protected function mapper()
    {
        return function(int $index): ?StagedOrderSetOrderTotalTaxAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetOrderTotalTaxActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}