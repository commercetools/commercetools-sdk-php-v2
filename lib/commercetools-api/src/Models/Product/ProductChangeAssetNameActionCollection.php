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
 * @extends MapperSequence<ProductChangeAssetNameAction>
 * @method ProductChangeAssetNameAction current()
 * @method ProductChangeAssetNameAction at($offset)
 */
class ProductChangeAssetNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductChangeAssetNameAction $value
     * @psalm-param ProductChangeAssetNameAction|stdClass $value
     * @return ProductChangeAssetNameActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductChangeAssetNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductChangeAssetNameAction
     */
    protected function mapper()
    {
        return function(int $index): ?ProductChangeAssetNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductChangeAssetNameActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}