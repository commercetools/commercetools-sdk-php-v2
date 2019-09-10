<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Category;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CategoryChangeAssetNameAction>
 * @method CategoryChangeAssetNameAction current()
 * @method CategoryChangeAssetNameAction at($offset)
 */
class CategoryChangeAssetNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CategoryChangeAssetNameAction $value
     * @psalm-param CategoryChangeAssetNameAction|stdClass $value
     * @return CategoryChangeAssetNameActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CategoryChangeAssetNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryChangeAssetNameAction
     */
    protected function mapper()
    {
        return function(int $index): ?CategoryChangeAssetNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategoryChangeAssetNameActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}