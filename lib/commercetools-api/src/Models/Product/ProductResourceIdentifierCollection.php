<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<ProductResourceIdentifier>
 * @method ProductResourceIdentifier current()
 * @method ProductResourceIdentifier end()
 * @method ProductResourceIdentifier at($offset)
 */
class ProductResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert ProductResourceIdentifier $value
     * @psalm-param ProductResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductResourceIdentifier
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductResourceIdentifier $data */
                $data = ProductResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
