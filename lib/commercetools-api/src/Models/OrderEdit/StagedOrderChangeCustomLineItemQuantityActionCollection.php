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
 * @extends MapperSequence<StagedOrderChangeCustomLineItemQuantityAction>
 * @method StagedOrderChangeCustomLineItemQuantityAction current()
 * @method StagedOrderChangeCustomLineItemQuantityAction at($offset)
 */
class StagedOrderChangeCustomLineItemQuantityActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderChangeCustomLineItemQuantityAction $value
     * @psalm-param StagedOrderChangeCustomLineItemQuantityAction|stdClass $value
     * @return StagedOrderChangeCustomLineItemQuantityActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderChangeCustomLineItemQuantityAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderChangeCustomLineItemQuantityAction
     */
    protected function mapper()
    {
        return function(int $index): ?StagedOrderChangeCustomLineItemQuantityAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderChangeCustomLineItemQuantityActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}