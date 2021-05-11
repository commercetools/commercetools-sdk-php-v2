<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<CategoryResourceIdentifier>
 * @method CategoryResourceIdentifier current()
 * @method CategoryResourceIdentifier at($offset)
 */
class CategoryResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert CategoryResourceIdentifier $value
     * @psalm-param CategoryResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategoryResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategoryResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryResourceIdentifier
     */
    protected function mapper()
    {
        return function (int $index): ?CategoryResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategoryResourceIdentifier $data */
                $data = CategoryResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
