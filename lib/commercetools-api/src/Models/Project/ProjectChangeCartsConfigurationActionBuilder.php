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
 * @implements Builder<ProjectChangeCartsConfigurationAction>
 */
final class ProjectChangeCartsConfigurationActionBuilder implements Builder
{
    /**
     * @var null|CartsConfiguration|CartsConfigurationBuilder
     */
    private $cartsConfiguration;

    /**
     * <p>Configuration for the <a href="/../api/projects/carts">Carts</a> feature.</p>
     *
     * @return null|CartsConfiguration
     */
    public function getCartsConfiguration()
    {
        return $this->cartsConfiguration instanceof CartsConfigurationBuilder ? $this->cartsConfiguration->build() : $this->cartsConfiguration;
    }

    /**
     * @param ?CartsConfiguration $cartsConfiguration
     * @return $this
     */
    public function withCartsConfiguration(?CartsConfiguration $cartsConfiguration)
    {
        $this->cartsConfiguration = $cartsConfiguration;

        return $this;
    }

    /**
     * @deprecated use withCartsConfiguration() instead
     * @return $this
     */
    public function withCartsConfigurationBuilder(?CartsConfigurationBuilder $cartsConfiguration)
    {
        $this->cartsConfiguration = $cartsConfiguration;

        return $this;
    }

    public function build(): ProjectChangeCartsConfigurationAction
    {
        return new ProjectChangeCartsConfigurationActionModel(
            $this->cartsConfiguration instanceof CartsConfigurationBuilder ? $this->cartsConfiguration->build() : $this->cartsConfiguration
        );
    }

    public static function of(): ProjectChangeCartsConfigurationActionBuilder
    {
        return new self();
    }
}
