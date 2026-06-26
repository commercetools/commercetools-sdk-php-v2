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
 * @extends MapperSequence<VariantAttributesAttributeMetadata>
 * @method VariantAttributesAttributeMetadata current()
 * @method VariantAttributesAttributeMetadata end()
 * @method VariantAttributesAttributeMetadata at($offset)
 */
class VariantAttributesAttributeMetadataCollection extends MapperSequence
{
    /**
     * @psalm-assert VariantAttributesAttributeMetadata $value
     * @psalm-param VariantAttributesAttributeMetadata|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantAttributesAttributeMetadataCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantAttributesAttributeMetadata) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantAttributesAttributeMetadata
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantAttributesAttributeMetadata {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantAttributesAttributeMetadata $data */
                $data = VariantAttributesAttributeMetadataModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
