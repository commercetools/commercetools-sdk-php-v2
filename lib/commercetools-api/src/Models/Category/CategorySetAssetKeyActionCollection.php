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
 * @extends MapperSequence<CategorySetAssetKeyAction>
 * @method CategorySetAssetKeyAction current()
 * @method CategorySetAssetKeyAction at($offset)
 */
class CategorySetAssetKeyActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CategorySetAssetKeyAction $value
     * @psalm-param CategorySetAssetKeyAction|stdClass $value
     * @return CategorySetAssetKeyActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CategorySetAssetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategorySetAssetKeyAction
     */
    protected function mapper()
    {
        return function(int $index): ?CategorySetAssetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategorySetAssetKeyActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}