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
 * @extends MapperSequence<VariantAttributes>
 * @method VariantAttributes current()
 * @method VariantAttributes end()
 * @method VariantAttributes at($offset)
 */
class VariantAttributesCollection extends MapperSequence
{
    /**
     * @psalm-assert VariantAttributes $value
     * @psalm-param VariantAttributes|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantAttributesCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantAttributes) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantAttributes
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantAttributes {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantAttributes $data */
                $data = VariantAttributesModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
