<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\ProductTailoring\ProductTailoringUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringSetExternalImagesAction>
 * @method ProductTailoringSetExternalImagesAction current()
 * @method ProductTailoringSetExternalImagesAction end()
 * @method ProductTailoringSetExternalImagesAction at($offset)
 */
class ProductTailoringSetExternalImagesActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringSetExternalImagesAction $value
     * @psalm-param ProductTailoringSetExternalImagesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringSetExternalImagesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringSetExternalImagesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringSetExternalImagesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringSetExternalImagesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringSetExternalImagesAction $data */
                $data = ProductTailoringSetExternalImagesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
