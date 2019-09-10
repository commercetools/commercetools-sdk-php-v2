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
 * @extends MapperSequence<StagedOrderSetLineItemCustomFieldAction>
 * @method StagedOrderSetLineItemCustomFieldAction current()
 * @method StagedOrderSetLineItemCustomFieldAction at($offset)
 */
class StagedOrderSetLineItemCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetLineItemCustomFieldAction $value
     * @psalm-param StagedOrderSetLineItemCustomFieldAction|stdClass $value
     * @return StagedOrderSetLineItemCustomFieldActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetLineItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetLineItemCustomFieldAction
     */
    protected function mapper()
    {
        return function(int $index): ?StagedOrderSetLineItemCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetLineItemCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}