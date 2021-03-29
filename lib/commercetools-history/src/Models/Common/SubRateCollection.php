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
 * @extends MapperSequence<SubRate>
 * @method SubRate current()
 * @method SubRate at($offset)
 */
class SubRateCollection extends MapperSequence
{
    /**
     * @psalm-assert SubRate $value
     * @psalm-param SubRate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SubRateCollection
     */
    public function add($value)
    {
        if (!$value instanceof SubRate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SubRate
     */
    protected function mapper()
    {
        return function (int $index): ?SubRate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SubRateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
