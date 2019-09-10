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
 * @extends MapperSequence<StagedOrderAddReturnInfoAction>
 * @method StagedOrderAddReturnInfoAction current()
 * @method StagedOrderAddReturnInfoAction at($offset)
 */
class StagedOrderAddReturnInfoActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderAddReturnInfoAction $value
     * @psalm-param StagedOrderAddReturnInfoAction|stdClass $value
     * @return StagedOrderAddReturnInfoActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderAddReturnInfoAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderAddReturnInfoAction
     */
    protected function mapper()
    {
        return function(int $index): ?StagedOrderAddReturnInfoAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderAddReturnInfoActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}