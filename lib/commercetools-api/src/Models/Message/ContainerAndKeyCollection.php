<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ContainerAndKey>
 * @method ContainerAndKey current()
 * @method ContainerAndKey end()
 * @method ContainerAndKey at($offset)
 */
class ContainerAndKeyCollection extends MapperSequence
{
    /**
     * @psalm-assert ContainerAndKey $value
     * @psalm-param ContainerAndKey|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ContainerAndKeyCollection
     */
    public function add($value)
    {
        if (!$value instanceof ContainerAndKey) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ContainerAndKey
     */
    protected function mapper()
    {
        return function (?int $index): ?ContainerAndKey {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ContainerAndKey $data */
                $data = ContainerAndKeyModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
