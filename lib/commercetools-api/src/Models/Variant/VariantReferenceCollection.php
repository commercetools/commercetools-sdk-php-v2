<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<VariantReference>
 * @method VariantReference current()
 * @method VariantReference end()
 * @method VariantReference at($offset)
 */
class VariantReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert VariantReference $value
     * @psalm-param VariantReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantReference
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantReference $data */
                $data = VariantReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
