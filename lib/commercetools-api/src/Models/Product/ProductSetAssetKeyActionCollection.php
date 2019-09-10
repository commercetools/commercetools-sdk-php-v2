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
 * @extends MapperSequence<ProductSetAssetKeyAction>
 * @method ProductSetAssetKeyAction current()
 * @method ProductSetAssetKeyAction at($offset)
 */
class ProductSetAssetKeyActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSetAssetKeyAction $value
     * @psalm-param ProductSetAssetKeyAction|stdClass $value
     * @return ProductSetAssetKeyActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetAssetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetAssetKeyAction
     */
    protected function mapper()
    {
        return function(int $index): ?ProductSetAssetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductSetAssetKeyActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}