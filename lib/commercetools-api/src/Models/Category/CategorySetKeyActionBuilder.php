<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CategorySetKeyAction>
 */
final class CategorySetKeyActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * <p>User-defined unique identifier for the category.
     * Keys can only contain alphanumeric characters (<code>a-Z, 0-9</code>), underscores and hyphens (<code>-, _</code>) and be between 2 and 256 characters.
     * If <code>key</code> is absent or <code>null</code>, this field will be removed if it exists.</p>.
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    public function build(): CategorySetKeyAction
    {
        return new CategorySetKeyActionModel(
            $this->key
        );
    }

    public static function of(): CategorySetKeyActionBuilder
    {
        return new self();
    }
}
