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
 * @implements Builder<ProjectChangeCartsConfiguration>
 */
final class ProjectChangeCartsConfigurationBuilder implements Builder
{
    /**
     * @var null|CartsConfiguration|CartsConfigurationBuilder
     */
    private $cartsConfiguration;

    /**
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
     * @return $this
     */
    public function withCartsConfigurationBuilder(?CartsConfigurationBuilder $cartsConfiguration)
    {
        $this->cartsConfiguration = $cartsConfiguration;

        return $this;
    }

    public function build(): ProjectChangeCartsConfiguration
    {
        return new ProjectChangeCartsConfigurationModel(
            $this->cartsConfiguration instanceof CartsConfigurationBuilder ? $this->cartsConfiguration->build() : $this->cartsConfiguration
        );
    }

    public static function of(): ProjectChangeCartsConfigurationBuilder
    {
        return new self();
    }
}
