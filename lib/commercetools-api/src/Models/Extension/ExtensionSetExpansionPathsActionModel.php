<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ExtensionSetExpansionPathsActionModel extends JsonObjectModel implements ExtensionSetExpansionPathsAction
{
    public const DISCRIMINATOR_VALUE = 'setExpansionPaths';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?array
     */
    protected $expansionPaths;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $expansionPaths = null,
        ?string $action = null
    ) {
        $this->expansionPaths = $expansionPaths;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
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
     * <p><a href="/api/general-concepts#expansion-paths">Expansion paths</a> used for reference expansion of the payload.</p>
     * <p>Be aware of the <a href="/api/limits#api-extensions">limits</a> of this feature and its <a href="/api/performance-tips#api-extensions">performance impact</a>.</p>
     *
     *
     * @return null|array
     */
    public function getExpansionPaths()
    {
        if (is_null($this->expansionPaths)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_EXPANSION_PATHS);
            if (is_null($data)) {
                return null;
            }
            $this->expansionPaths = $data;
        }

        return $this->expansionPaths;
    }


    /**
     * @param ?array $expansionPaths
     */
    public function setExpansionPaths(?array $expansionPaths): void
    {
        $this->expansionPaths = $expansionPaths;
    }
}
