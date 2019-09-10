<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProjectUpdateModel extends JsonObjectModel implements ProjectUpdate
{
    /**
     * @var ?ProjectUpdateActionCollection
     */
    protected $actions;

    /**
     * @var ?int
     */
    protected $version;

    public function __construct(
        ProjectUpdateActionCollection $actions = null,
        int $version = null
    ) {
        $this->actions = $actions;
        $this->version = $version;
    }

    /**
     * @return null|ProjectUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProjectUpdate::FIELD_ACTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->actions = ProjectUpdateActionCollection::fromArray($data);
        }

        return $this->actions;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ProjectUpdate::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    public function setActions(?ProjectUpdateActionCollection $actions): void
    {
        $this->actions = $actions;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }
}
