<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProjectChangeProductSearchIndexingEnabledActionModel extends JsonObjectModel implements ProjectChangeProductSearchIndexingEnabledAction
{
    public const DISCRIMINATOR_VALUE = 'changeProductSearchIndexingEnabled';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?bool
     */
    protected $enabled;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $enabled = null
    ) {
        $this->enabled = $enabled;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|bool
     */
    public function getEnabled()
    {
        if (is_null($this->enabled)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_ENABLED);
            if (is_null($data)) {
                return null;
            }
            $this->enabled = (bool) $data;
        }

        return $this->enabled;
    }


    /**
     * @param ?bool $enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }
}
