<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Associate>
 * @method Associate current()
 * @method Associate end()
 * @method Associate at($offset)
 */
class AssociateCollection extends MapperSequence
{
    /**
     * @psalm-assert Associate $value
     * @psalm-param Associate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateCollection
     */
    public function add($value)
    {
        if (!$value instanceof Associate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Associate
     */
    protected function mapper()
    {
        return function (?int $index): ?Associate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Associate $data */
                $data = AssociateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
