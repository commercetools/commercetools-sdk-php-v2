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
 * @extends MapperSequence<TaxCategoryDraft>
 * @method TaxCategoryDraft current()
 * @method TaxCategoryDraft at($offset)
 */
class TaxCategoryDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert TaxCategoryDraft $value
     * @psalm-param TaxCategoryDraft|stdClass $value
     * @return TaxCategoryDraftCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof TaxCategoryDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxCategoryDraft
     */
    protected function mapper()
    {
        return function(int $index): ?TaxCategoryDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TaxCategoryDraftModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}