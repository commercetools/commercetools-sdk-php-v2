<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ExtensionSetDependenciesAction>
 */
final class ExtensionSetDependenciesActionBuilder implements Builder
{
    /**

     * @var ?ExtensionResourceIdentifierCollection
     */
    private $dependencies;

    /**
     * <p>Extensions this Extension depends on, identified by <code>id</code> or <code>key</code>. Set to an empty array to remove all dependencies. Maximum 5 entries.</p>
     *

     * @return null|ExtensionResourceIdentifierCollection
     */
    public function getDependencies()
    {
        return $this->dependencies;
    }

    /**
     * @param ?ExtensionResourceIdentifierCollection $dependencies
     * @return $this
     */
    public function withDependencies(?ExtensionResourceIdentifierCollection $dependencies)
    {
        $this->dependencies = $dependencies;

        return $this;
    }


    public function build(): ExtensionSetDependenciesAction
    {
        return new ExtensionSetDependenciesActionModel(
            $this->dependencies
        );
    }

    public static function of(): ExtensionSetDependenciesActionBuilder
    {
        return new self();
    }
}
