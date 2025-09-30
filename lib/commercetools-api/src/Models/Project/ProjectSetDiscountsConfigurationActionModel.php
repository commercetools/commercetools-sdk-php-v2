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
final class ProjectSetDiscountsConfigurationActionModel extends JsonObjectModel implements ProjectSetDiscountsConfigurationAction
{
    public const DISCRIMINATOR_VALUE = 'setDiscountsConfiguration';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?DiscountsConfiguration
     */
    protected $discountsConfiguration;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DiscountsConfiguration $discountsConfiguration = null,
        ?string $action = null
    ) {
        $this->discountsConfiguration = $discountsConfiguration;
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
     * <p>Configuration for the behavior of Cart and Product Discounts in the Project.</p>
     *
     *
     * @return null|DiscountsConfiguration
     */
    public function getDiscountsConfiguration()
    {
        if (is_null($this->discountsConfiguration)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNTS_CONFIGURATION);
            if (is_null($data)) {
                return null;
            }

            $this->discountsConfiguration = DiscountsConfigurationModel::of($data);
        }

        return $this->discountsConfiguration;
    }


    /**
     * @param ?DiscountsConfiguration $discountsConfiguration
     */
    public function setDiscountsConfiguration(?DiscountsConfiguration $discountsConfiguration): void
    {
        $this->discountsConfiguration = $discountsConfiguration;
    }
}
