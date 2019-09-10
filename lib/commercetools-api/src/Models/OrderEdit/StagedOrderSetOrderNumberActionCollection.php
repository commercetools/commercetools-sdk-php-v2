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
 * @extends MapperSequence<StagedOrderSetOrderNumberAction>
 * @method StagedOrderSetOrderNumberAction current()
 * @method StagedOrderSetOrderNumberAction at($offset)
 */
class StagedOrderSetOrderNumberActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetOrderNumberAction $value
     * @psalm-param StagedOrderSetOrderNumberAction|stdClass $value
     * @return StagedOrderSetOrderNumberActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetOrderNumberAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetOrderNumberAction
     */
    protected function mapper()
    {
        return function(int $index): ?StagedOrderSetOrderNumberAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetOrderNumberActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}