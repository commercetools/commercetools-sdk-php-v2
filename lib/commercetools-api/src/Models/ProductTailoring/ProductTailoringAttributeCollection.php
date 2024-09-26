<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductTailoringAttribute>
 * @method ProductTailoringAttribute current()
 * @method ProductTailoringAttribute end()
 * @method ProductTailoringAttribute at($offset)
 */
class ProductTailoringAttributeCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTailoringAttribute $value
     * @psalm-param ProductTailoringAttribute|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringAttribute
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringAttribute $data */
                $data = ProductTailoringAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
