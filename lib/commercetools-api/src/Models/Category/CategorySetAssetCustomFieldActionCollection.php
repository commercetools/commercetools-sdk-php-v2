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
 * @extends MapperSequence<CategorySetAssetCustomFieldAction>
 * @method CategorySetAssetCustomFieldAction current()
 * @method CategorySetAssetCustomFieldAction at($offset)
 */
class CategorySetAssetCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CategorySetAssetCustomFieldAction $value
     * @psalm-param CategorySetAssetCustomFieldAction|stdClass $value
     * @return CategorySetAssetCustomFieldActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CategorySetAssetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategorySetAssetCustomFieldAction
     */
    protected function mapper()
    {
        return function(int $index): ?CategorySetAssetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategorySetAssetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}