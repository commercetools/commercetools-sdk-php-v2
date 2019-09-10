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
 * @extends MapperSequence<StagedOrderAddCustomLineItemAction>
 * @method StagedOrderAddCustomLineItemAction current()
 * @method StagedOrderAddCustomLineItemAction at($offset)
 */
class StagedOrderAddCustomLineItemActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderAddCustomLineItemAction $value
     * @psalm-param StagedOrderAddCustomLineItemAction|stdClass $value
     * @return StagedOrderAddCustomLineItemActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderAddCustomLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderAddCustomLineItemAction
     */
    protected function mapper()
    {
        return function(int $index): ?StagedOrderAddCustomLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderAddCustomLineItemActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}