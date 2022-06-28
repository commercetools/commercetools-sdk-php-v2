<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Hit>
 * @method Hit current()
 * @method Hit end()
 * @method Hit at($offset)
 */
class HitCollection extends MapperSequence
{
    /**
     * @psalm-assert Hit $value
     * @psalm-param Hit|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return HitCollection
     */
    public function add($value)
    {
        if (!$value instanceof Hit) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Hit
     */
    protected function mapper()
    {
        return function (?int $index): ?Hit {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Hit $data */
                $data = HitModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
