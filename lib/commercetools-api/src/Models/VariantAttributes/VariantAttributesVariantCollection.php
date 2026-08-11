<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\VariantAttributes;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<VariantAttributesVariant>
 * @method VariantAttributesVariant current()
 * @method VariantAttributesVariant end()
 * @method VariantAttributesVariant at($offset)
 */
class VariantAttributesVariantCollection extends MapperSequence
{
    /**
     * @psalm-assert VariantAttributesVariant $value
     * @psalm-param VariantAttributesVariant|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantAttributesVariantCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantAttributesVariant) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantAttributesVariant
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantAttributesVariant {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantAttributesVariant $data */
                $data = VariantAttributesVariantModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
