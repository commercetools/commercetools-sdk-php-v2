<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Api\Models\Variant\VariantUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends VariantUpdateActionCollection<VariantSetImagesAction>
 * @method VariantSetImagesAction current()
 * @method VariantSetImagesAction end()
 * @method VariantSetImagesAction at($offset)
 */
class VariantSetImagesActionCollection extends VariantUpdateActionCollection
{
    /**
     * @psalm-assert VariantSetImagesAction $value
     * @psalm-param VariantSetImagesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantSetImagesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantSetImagesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantSetImagesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantSetImagesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantSetImagesAction $data */
                $data = VariantSetImagesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
