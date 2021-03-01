<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProjectChangeProductSearchIndexingEnabledAction>
 */
final class ProjectChangeProductSearchIndexingEnabledActionBuilder implements Builder
{
    /**
     * @var ?bool
     */
    private $enabled;

    /**
     * @return null|bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param ?bool $enabled
     * @return $this
     */
    public function withEnabled(?bool $enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }


    public function build(): ProjectChangeProductSearchIndexingEnabledAction
    {
        return new ProjectChangeProductSearchIndexingEnabledActionModel(
            $this->enabled
        );
    }

    public static function of(): ProjectChangeProductSearchIndexingEnabledActionBuilder
    {
        return new self();
    }
}
