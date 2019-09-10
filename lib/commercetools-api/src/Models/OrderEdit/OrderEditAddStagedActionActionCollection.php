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
 * @extends MapperSequence<OrderEditAddStagedActionAction>
 * @method OrderEditAddStagedActionAction current()
 * @method OrderEditAddStagedActionAction at($offset)
 */
class OrderEditAddStagedActionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderEditAddStagedActionAction $value
     * @psalm-param OrderEditAddStagedActionAction|stdClass $value
     * @return OrderEditAddStagedActionActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditAddStagedActionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditAddStagedActionAction
     */
    protected function mapper()
    {
        return function(int $index): ?OrderEditAddStagedActionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderEditAddStagedActionActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}