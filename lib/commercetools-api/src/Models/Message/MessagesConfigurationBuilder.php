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
 * @implements Builder<MessagesConfiguration>
 */
final class MessagesConfigurationBuilder implements Builder
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
     * @param ?bool $enabled
     * @return $this
     */
    public function withEnabled(?bool $enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * @param ?int $deleteDaysAfterCreation
     * @return $this
     */
    public function withDeleteDaysAfterCreation(?int $deleteDaysAfterCreation)
    {
        $this->deleteDaysAfterCreation = $deleteDaysAfterCreation;

        return $this;
    }


    public function build(): MessagesConfiguration
    {
        return new MessagesConfigurationModel(
            $this->enabled,
            $this->deleteDaysAfterCreation
        );
    }

    public static function of(): MessagesConfigurationBuilder
    {
        return new self();
    }
}
