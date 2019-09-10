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
 * @extends MapperSequence<ProductSetAssetDescriptionAction>
 * @method ProductSetAssetDescriptionAction current()
 * @method ProductSetAssetDescriptionAction at($offset)
 */
class ProductSetAssetDescriptionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSetAssetDescriptionAction $value
     * @psalm-param ProductSetAssetDescriptionAction|stdClass $value
     * @return ProductSetAssetDescriptionActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetAssetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetAssetDescriptionAction
     */
    protected function mapper()
    {
        return function(int $index): ?ProductSetAssetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductSetAssetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}