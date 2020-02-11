<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MessageConfiguration>
 */
final class MessageConfigurationBuilder implements Builder
{
    /**
     * @var ?bool
     */
    private $enabled;

    /**
     * @var ?int
     */
    private $deleteDaysAfterCreation;

    /**
     * @return null|bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @return null|int
     */
    public function getDeleteDaysAfterCreation()
    {
        return $this->deleteDaysAfterCreation;
    }

    /**
     * @return $this
     */
    public function withEnabled(?bool $enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDeleteDaysAfterCreation(?int $deleteDaysAfterCreation)
    {
        $this->deleteDaysAfterCreation = $deleteDaysAfterCreation;

        return $this;
    }


    public function build(): MessageConfiguration
    {
        return new MessageConfigurationModel(
            $this->enabled,
            $this->deleteDaysAfterCreation
        );
    }

    public static function of(): MessageConfigurationBuilder
    {
        return new self();
    }
}
