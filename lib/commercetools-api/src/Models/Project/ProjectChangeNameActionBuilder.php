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
 * @implements Builder<ProjectChangeNameAction>
 */
final class ProjectChangeNameActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**
     * <p>New value to set. Must not be empty.</p>
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


    public function build(): ProjectChangeNameAction
    {
        return new ProjectChangeNameActionModel(
            $this->name
        );
    }

    public static function of(): ProjectChangeNameActionBuilder
    {
        return new self();
    }
}
