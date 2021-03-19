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
 * @extends MapperSequence<UpdateSyncInfoChange>
 * @method UpdateSyncInfoChange current()
 * @method UpdateSyncInfoChange at($offset)
 */
class UpdateSyncInfoChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert UpdateSyncInfoChange $value
     * @psalm-param UpdateSyncInfoChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return UpdateSyncInfoChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof UpdateSyncInfoChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?UpdateSyncInfoChange
     */
    protected function mapper()
    {
        return function (int $index): ?UpdateSyncInfoChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = UpdateSyncInfoChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
