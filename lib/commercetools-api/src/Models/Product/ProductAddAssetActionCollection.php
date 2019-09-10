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
 * @extends MapperSequence<ProductAddAssetAction>
 * @method ProductAddAssetAction current()
 * @method ProductAddAssetAction at($offset)
 */
class ProductAddAssetActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductAddAssetAction $value
     * @psalm-param ProductAddAssetAction|stdClass $value
     * @return ProductAddAssetActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductAddAssetAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductAddAssetAction
     */
    protected function mapper()
    {
        return function(int $index): ?ProductAddAssetAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductAddAssetActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}