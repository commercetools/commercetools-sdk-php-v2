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
 * @extends MapperSequence<MissingPricesVariantLevel>
 * @method MissingPricesVariantLevel current()
 * @method MissingPricesVariantLevel at($offset)
 */
class MissingPricesVariantLevelCollection extends MapperSequence
{
    /**
     * @psalm-assert MissingPricesVariantLevel $value
     * @psalm-param MissingPricesVariantLevel|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MissingPricesVariantLevelCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingPricesVariantLevel) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingPricesVariantLevel
     */
    protected function mapper()
    {
        return function (int $index): ?MissingPricesVariantLevel {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MissingPricesVariantLevelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
