<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Attribution>
 * @method Attribution current()
 * @method Attribution end()
 * @method Attribution at($offset)
 */
class AttributionCollection extends MapperSequence
{
    /**
     * @psalm-assert Attribution $value
     * @psalm-param Attribution|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributionCollection
     */
    public function add($value)
    {
        if (!$value instanceof Attribution) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Attribution
     */
    protected function mapper()
    {
        return function (?int $index): ?Attribution {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Attribution $data */
                $data = AttributionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
