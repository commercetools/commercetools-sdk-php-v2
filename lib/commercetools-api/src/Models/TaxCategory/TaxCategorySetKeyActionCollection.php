<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TaxCategorySetKeyAction>
 * @method TaxCategorySetKeyAction current()
 * @method TaxCategorySetKeyAction at($offset)
 */
class TaxCategorySetKeyActionCollection extends MapperSequence
{
    /**
     * @psalm-assert TaxCategorySetKeyAction $value
     * @psalm-param TaxCategorySetKeyAction|stdClass $value
     * @return TaxCategorySetKeyActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof TaxCategorySetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxCategorySetKeyAction
     */
    protected function mapper()
    {
        return function(int $index): ?TaxCategorySetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TaxCategorySetKeyActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}