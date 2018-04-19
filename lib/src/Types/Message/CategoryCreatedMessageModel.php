<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

use Commercetools\Types\Category\Category;

class CategoryCreatedMessageModel extends MessageModel implements CategoryCreatedMessage
{
    const DISCRIMINATOR_VALUE = 'CategoryCreated';

    /**
     * @var Category
     */
    protected $category;

    /**
     * @return Category
     */
    public function getCategory()
    {
        if (is_null($this->category)) {
            $value = $this->raw(CategoryCreatedMessage::FIELD_CATEGORY);
            if (is_null($value)) {
                return $this->mapData(Category::class, null);
            }
            $value = $this->mapData(Category::class, $value);

            $this->category = $value;
        }
        return $this->category;
    }

    /**
     * @param Category $category
     * @return $this
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;

        return $this;
    }

}
