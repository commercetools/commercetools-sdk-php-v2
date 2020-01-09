<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\Builder;

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
     * <p>If not defined, the external ID is unset.</p>
     *
     * @return null|string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
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
