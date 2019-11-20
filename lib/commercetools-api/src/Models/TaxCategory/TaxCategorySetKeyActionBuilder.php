<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\Builder;

/**
 * @implements Builder<TaxCategorySetKeyAction>
 */
final class TaxCategorySetKeyActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
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

    public function build(): TaxCategorySetKeyAction
    {
        return new TaxCategorySetKeyActionModel(
            $this->key
        );
    }

    public static function of(): TaxCategorySetKeyActionBuilder
    {
        return new self();
    }
}
