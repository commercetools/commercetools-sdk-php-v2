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
 * @implements Builder<ProjectChangeOrderSearchStatusAction>
 */
final class ProjectChangeOrderSearchStatusActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $status;

    /**
     * <p>Activates or deactivates the <a href="/../api/projects/order-search">Order Search</a> feature. Activation will trigger building a search index for the Orders in the Project.</p>
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


    public function build(): ProjectChangeOrderSearchStatusAction
    {
        return new ProjectChangeOrderSearchStatusActionModel(
            $this->status
        );
    }

    public static function of(): ProjectChangeOrderSearchStatusActionBuilder
    {
        return new self();
    }
}
