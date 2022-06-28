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
final class ProjectChangeCartsConfigurationActionModel extends JsonObjectModel implements ProjectChangeCartsConfigurationAction
{
    public const DISCRIMINATOR_VALUE = 'changeCartsConfiguration';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?CartsConfiguration
     */
    protected $cartsConfiguration;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CartsConfiguration $cartsConfiguration = null
    ) {
        $this->cartsConfiguration = $cartsConfiguration;
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
     * <p>Configuration for the <a href="/../api/projects/carts">Carts</a> feature.</p>
     *
     * @return null|CartsConfiguration
     */
    public function getCartsConfiguration()
    {
        if (is_null($this->cartsConfiguration)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CARTS_CONFIGURATION);
            if (is_null($data)) {
                return null;
            }

            $this->cartsConfiguration = CartsConfigurationModel::of($data);
        }

        return $this->cartsConfiguration;
    }


    /**
     * @param ?CartsConfiguration $cartsConfiguration
     */
    public function setCartsConfiguration(?CartsConfiguration $cartsConfiguration): void
    {
        $this->cartsConfiguration = $cartsConfiguration;
    }
}
