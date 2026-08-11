<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<VariantData>
 * @method VariantData current()
 * @method VariantData end()
 * @method VariantData at($offset)
 */
class VariantDataCollection extends MapperSequence
{
    /**
     * @psalm-assert VariantData $value
     * @psalm-param VariantData|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantDataCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantData) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantData
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantData {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantData $data */
                $data = VariantDataModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
