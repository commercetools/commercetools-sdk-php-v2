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
 * @extends MapperSequence<StagedOrderUpdateSyncInfoAction>
 * @method StagedOrderUpdateSyncInfoAction current()
 * @method StagedOrderUpdateSyncInfoAction at($offset)
 */
class StagedOrderUpdateSyncInfoActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderUpdateSyncInfoAction $value
     * @psalm-param StagedOrderUpdateSyncInfoAction|stdClass $value
     * @return StagedOrderUpdateSyncInfoActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderUpdateSyncInfoAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderUpdateSyncInfoAction
     */
    protected function mapper()
    {
        return function(int $index): ?StagedOrderUpdateSyncInfoAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderUpdateSyncInfoActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}