<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductCatalogData>
 * @method ProductCatalogData current()
 * @method ProductCatalogData at($offset)
 */
class ProductCatalogDataCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductCatalogData $value
     * @psalm-param ProductCatalogData|stdClass $value
     * @return ProductCatalogDataCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductCatalogData) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductCatalogData
     */
    protected function mapper()
    {
        return function(int $index): ?ProductCatalogData {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductCatalogDataModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}