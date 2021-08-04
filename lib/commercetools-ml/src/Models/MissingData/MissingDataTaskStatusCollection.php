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
 * @extends MapperSequence<MissingDataTaskStatus>
 * @method MissingDataTaskStatus current()
 * @method MissingDataTaskStatus at($offset)
 */
class MissingDataTaskStatusCollection extends MapperSequence
{
    /**
     * @psalm-assert MissingDataTaskStatus $value
     * @psalm-param MissingDataTaskStatus|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MissingDataTaskStatusCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingDataTaskStatus) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingDataTaskStatus
     */
    protected function mapper()
    {
        return function (?int $index): ?MissingDataTaskStatus {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MissingDataTaskStatus $data */
                $data = MissingDataTaskStatusModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
