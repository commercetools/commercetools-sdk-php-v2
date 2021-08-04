<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PriceTier>
 * @method PriceTier current()
 * @method PriceTier at($offset)
 */
class PriceTierCollection extends MapperSequence
{
    /**
     * @psalm-assert PriceTier $value
     * @psalm-param PriceTier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PriceTierCollection
     */
    public function add($value)
    {
        if (!$value instanceof PriceTier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PriceTier
     */
    protected function mapper()
    {
        return function (?int $index): ?PriceTier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PriceTier $data */
                $data = PriceTierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
