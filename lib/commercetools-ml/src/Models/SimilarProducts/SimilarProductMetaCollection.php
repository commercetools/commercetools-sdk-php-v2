<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\SimilarProducts;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SimilarProductMeta>
 * @method SimilarProductMeta current()
 * @method SimilarProductMeta at($offset)
 */
class SimilarProductMetaCollection extends MapperSequence
{
    /**
     * @psalm-assert SimilarProductMeta $value
     * @psalm-param SimilarProductMeta|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SimilarProductMetaCollection
     */
    public function add($value)
    {
        if (!$value instanceof SimilarProductMeta) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SimilarProductMeta
     */
    protected function mapper()
    {
        return function (int $index): ?SimilarProductMeta {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SimilarProductMetaModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
