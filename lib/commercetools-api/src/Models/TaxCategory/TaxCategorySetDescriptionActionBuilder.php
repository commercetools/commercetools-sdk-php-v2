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
 * @implements Builder<TaxCategorySetDescriptionAction>
 */
final class TaxCategorySetDescriptionActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $description;

    /**
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param ?string $description
     * @return $this
     */
    public function withDescription(?string $description)
    {
        $this->description = $description;

        return $this;
    }


    public function build(): TaxCategorySetDescriptionAction
    {
        return new TaxCategorySetDescriptionActionModel(
            $this->description
        );
    }

    public static function of(): TaxCategorySetDescriptionActionBuilder
    {
        return new self();
    }
}
