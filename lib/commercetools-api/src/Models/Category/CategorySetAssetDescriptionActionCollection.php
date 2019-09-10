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
 * @extends MapperSequence<CategorySetAssetDescriptionAction>
 * @method CategorySetAssetDescriptionAction current()
 * @method CategorySetAssetDescriptionAction at($offset)
 */
class CategorySetAssetDescriptionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CategorySetAssetDescriptionAction $value
     * @psalm-param CategorySetAssetDescriptionAction|stdClass $value
     * @return CategorySetAssetDescriptionActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CategorySetAssetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategorySetAssetDescriptionAction
     */
    protected function mapper()
    {
        return function(int $index): ?CategorySetAssetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategorySetAssetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}