<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Pricemapping;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PriceMapping>
 *
 * @method PriceMapping current()
 * @method PriceMapping at($offset)
 */
class PriceMappingCollection extends MapperSequence
{
    /**
     * @psalm-assert PriceMapping $value
     * @psalm-param PriceMapping|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return PriceMappingCollection
     */
    public function add($value)
    {
        if (!$value instanceof PriceMapping) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PriceMapping
     */
    protected function mapper()
    {
        return function (int $index): ?PriceMapping {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PriceMappingModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
