<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MissingPricesTaskStatus>
 * @method MissingPricesTaskStatus current()
 * @method MissingPricesTaskStatus at($offset)
 */
class MissingPricesTaskStatusCollection extends MapperSequence
{
    /**
     * @psalm-assert MissingPricesTaskStatus $value
     * @psalm-param MissingPricesTaskStatus|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MissingPricesTaskStatusCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingPricesTaskStatus) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingPricesTaskStatus
     */
    protected function mapper()
    {
        return function (int $index): ?MissingPricesTaskStatus {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MissingPricesTaskStatusModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
