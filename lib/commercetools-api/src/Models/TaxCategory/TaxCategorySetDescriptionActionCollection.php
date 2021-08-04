<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Api\Models\TaxCategory\TaxCategoryUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends TaxCategoryUpdateActionCollection<TaxCategorySetDescriptionAction>
 * @method TaxCategorySetDescriptionAction current()
 * @method TaxCategorySetDescriptionAction end()
 * @method TaxCategorySetDescriptionAction at($offset)
 */
class TaxCategorySetDescriptionActionCollection extends TaxCategoryUpdateActionCollection
{
    /**
     * @psalm-assert TaxCategorySetDescriptionAction $value
     * @psalm-param TaxCategorySetDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TaxCategorySetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TaxCategorySetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxCategorySetDescriptionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?TaxCategorySetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TaxCategorySetDescriptionAction $data */
                $data = TaxCategorySetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
