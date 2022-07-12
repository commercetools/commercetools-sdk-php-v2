<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CategorySetExternalIdAction>
 */
final class CategorySetExternalIdActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $externalId;

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @param ?string $externalId
     * @return $this
     */
    public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }


    public function build(): CategorySetExternalIdAction
    {
        return new CategorySetExternalIdActionModel(
            $this->externalId
        );
    }

    public static function of(): CategorySetExternalIdActionBuilder
    {
        return new self();
    }
}
