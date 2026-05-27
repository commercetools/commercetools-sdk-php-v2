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
final class ExtensionSetDependenciesActionModel extends JsonObjectModel implements ExtensionSetDependenciesAction
{
    public const DISCRIMINATOR_VALUE = 'setDependencies';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?ExtensionResourceIdentifierCollection
     */
    protected $dependencies;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ExtensionResourceIdentifierCollection $dependencies = null,
        ?string $action = null
    ) {
        $this->dependencies = $dependencies;
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
     * <p>Extensions this Extension depends on, identified by <code>id</code> or <code>key</code>. Set to an empty array to remove all dependencies. Maximum 5 entries.</p>
     *
     *
     * @return null|ExtensionResourceIdentifierCollection
     */
    public function getDependencies()
    {
        if (is_null($this->dependencies)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_DEPENDENCIES);
            if (is_null($data)) {
                return null;
            }
            $this->dependencies = ExtensionResourceIdentifierCollection::fromArray($data);
        }

        return $this->dependencies;
    }


    /**
     * @param ?ExtensionResourceIdentifierCollection $dependencies
     */
    public function setDependencies(?ExtensionResourceIdentifierCollection $dependencies): void
    {
        $this->dependencies = $dependencies;
    }
}
