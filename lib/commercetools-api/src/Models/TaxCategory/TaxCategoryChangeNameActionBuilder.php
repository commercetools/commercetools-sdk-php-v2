<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p>New value to set.</p>
     * <p>If the provided name is used by another TaxCategory in the Project, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param ?string $name
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
