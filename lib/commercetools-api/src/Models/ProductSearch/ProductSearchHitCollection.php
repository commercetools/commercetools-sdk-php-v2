<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductSearchHit>
 * @method ProductSearchHit current()
 * @method ProductSearchHit end()
 * @method ProductSearchHit at($offset)
 */
class ProductSearchHitCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSearchHit $value
     * @psalm-param ProductSearchHit|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSearchHitCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSearchHit) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSearchHit
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSearchHit {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSearchHit $data */
                $data = ProductSearchHitModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
