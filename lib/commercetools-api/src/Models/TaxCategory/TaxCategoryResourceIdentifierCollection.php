<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<TaxCategoryResourceIdentifier>
 * @method TaxCategoryResourceIdentifier current()
 * @method TaxCategoryResourceIdentifier end()
 * @method TaxCategoryResourceIdentifier at($offset)
 */
class TaxCategoryResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert TaxCategoryResourceIdentifier $value
     * @psalm-param TaxCategoryResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TaxCategoryResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof TaxCategoryResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxCategoryResourceIdentifier
     */
    protected function mapper()
    {
        return function (?int $index): ?TaxCategoryResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TaxCategoryResourceIdentifier $data */
                $data = TaxCategoryResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
