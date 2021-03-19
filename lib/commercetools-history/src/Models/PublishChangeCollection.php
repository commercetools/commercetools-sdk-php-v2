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
 * @extends MapperSequence<PublishChange>
 * @method PublishChange current()
 * @method PublishChange at($offset)
 */
class PublishChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert PublishChange $value
     * @psalm-param PublishChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PublishChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof PublishChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PublishChange
     */
    protected function mapper()
    {
        return function (int $index): ?PublishChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PublishChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
