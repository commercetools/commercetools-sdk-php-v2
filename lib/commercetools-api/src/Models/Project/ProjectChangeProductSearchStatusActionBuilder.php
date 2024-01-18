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
 * @implements Builder<ProjectChangeProductSearchStatusAction>
 */
final class ProjectChangeProductSearchStatusActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $status;

    /**
     * <p>Activates or deactivates the <a href="/../api/projects/product-search">Product Search</a> feature. Activation will trigger building a search index for the Products in the Project.</p>
     *

     * @return null|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param ?string $status
     * @return $this
     */
    public function withStatus(?string $status)
    {
        $this->status = $status;

        return $this;
    }


    public function build(): ProjectChangeProductSearchStatusAction
    {
        return new ProjectChangeProductSearchStatusActionModel(
            $this->status
        );
    }

    public static function of(): ProjectChangeProductSearchStatusActionBuilder
    {
        return new self();
    }
}
