<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Base\JsonCollection;
use Commercetools\Base\DiscriminatorResolver;


class CategoryUpdateActionCollectionModel extends JsonCollection implements CategoryUpdateActionCollection {

    /**
     * @param CategoryUpdateAction $value
     * @return CategoryUpdateActionCollection
     */
    public function add($value) {
        if (!$value instanceof CategoryUpdateAction) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CategoryUpdateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CategoryUpdateAction) {
            $resolvedClass = $this->resolveDiscriminator(CategoryUpdateAction::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
