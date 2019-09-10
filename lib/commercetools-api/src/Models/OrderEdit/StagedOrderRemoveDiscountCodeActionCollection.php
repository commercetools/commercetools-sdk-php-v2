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
 * @extends MapperSequence<StagedOrderRemoveDiscountCodeAction>
 * @method StagedOrderRemoveDiscountCodeAction current()
 * @method StagedOrderRemoveDiscountCodeAction at($offset)
 */
class StagedOrderRemoveDiscountCodeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderRemoveDiscountCodeAction $value
     * @psalm-param StagedOrderRemoveDiscountCodeAction|stdClass $value
     * @return StagedOrderRemoveDiscountCodeActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderRemoveDiscountCodeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderRemoveDiscountCodeAction
     */
    protected function mapper()
    {
        return function(int $index): ?StagedOrderRemoveDiscountCodeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderRemoveDiscountCodeActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}