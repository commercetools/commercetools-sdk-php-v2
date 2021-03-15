<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<UpdateSyncInfoAction>
 * @method UpdateSyncInfoAction current()
 * @method UpdateSyncInfoAction at($offset)
 */
class UpdateSyncInfoActionCollection extends MapperSequence
{
    /**
     * @psalm-assert UpdateSyncInfoAction $value
     * @psalm-param UpdateSyncInfoAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return UpdateSyncInfoActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof UpdateSyncInfoAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?UpdateSyncInfoAction
     */
    protected function mapper()
    {
        return function (int $index): ?UpdateSyncInfoAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = UpdateSyncInfoActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
