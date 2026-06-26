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
 * @extends MapperSequence<VariantProjection>
 * @method VariantProjection current()
 * @method VariantProjection end()
 * @method VariantProjection at($offset)
 */
class VariantProjectionCollection extends MapperSequence
{
    /**
     * @psalm-assert VariantProjection $value
     * @psalm-param VariantProjection|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantProjectionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantProjection) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantProjection
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantProjection {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantProjection $data */
                $data = VariantProjectionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
