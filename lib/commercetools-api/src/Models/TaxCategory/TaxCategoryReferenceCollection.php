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
 * @extends MapperSequence<TaxCategoryReference>
 * @method TaxCategoryReference current()
 * @method TaxCategoryReference at($offset)
 */
class TaxCategoryReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert TaxCategoryReference $value
     * @psalm-param TaxCategoryReference|stdClass $value
     * @return TaxCategoryReferenceCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof TaxCategoryReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxCategoryReference
     */
    protected function mapper()
    {
        return function(int $index): ?TaxCategoryReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TaxCategoryReferenceModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}