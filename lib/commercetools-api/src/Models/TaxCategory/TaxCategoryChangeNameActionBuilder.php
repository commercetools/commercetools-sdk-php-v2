<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\Builder;

/**
 * @implements Builder<TaxCategoryChangeNameAction>
 */
final class TaxCategoryChangeNameActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    public function build(): TaxCategoryChangeNameAction
    {
        return new TaxCategoryChangeNameActionModel(
            $this->name
        );
    }

    public static function of(): TaxCategoryChangeNameActionBuilder
    {
        return new self();
    }
}
