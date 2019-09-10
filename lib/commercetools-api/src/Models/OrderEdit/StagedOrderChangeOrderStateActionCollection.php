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
 * @extends MapperSequence<StagedOrderChangeOrderStateAction>
 * @method StagedOrderChangeOrderStateAction current()
 * @method StagedOrderChangeOrderStateAction at($offset)
 */
class StagedOrderChangeOrderStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderChangeOrderStateAction $value
     * @psalm-param StagedOrderChangeOrderStateAction|stdClass $value
     * @return StagedOrderChangeOrderStateActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderChangeOrderStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderChangeOrderStateAction
     */
    protected function mapper()
    {
        return function(int $index): ?StagedOrderChangeOrderStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderChangeOrderStateActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}