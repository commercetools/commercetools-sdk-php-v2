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
 * @extends MapperSequence<StagedOrderTransitionLineItemStateAction>
 * @method StagedOrderTransitionLineItemStateAction current()
 * @method StagedOrderTransitionLineItemStateAction at($offset)
 */
class StagedOrderTransitionLineItemStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderTransitionLineItemStateAction $value
     * @psalm-param StagedOrderTransitionLineItemStateAction|stdClass $value
     * @return StagedOrderTransitionLineItemStateActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderTransitionLineItemStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderTransitionLineItemStateAction
     */
    protected function mapper()
    {
        return function(int $index): ?StagedOrderTransitionLineItemStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderTransitionLineItemStateActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}