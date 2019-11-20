<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;

/**
 * @implements Builder<MessageConfiguration>
 */
final class MessageConfigurationBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $deleteDaysAfterCreation;

    /**
     * @var ?bool
     */
    private $enabled;

    /**
     * @return null|int
     */
    public function getDeleteDaysAfterCreation()
    {
        return $this->deleteDaysAfterCreation;
    }

    /**
     * @return null|bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @return $this
     */
    public function withDeleteDaysAfterCreation(?int $deleteDaysAfterCreation)
    {
        $this->deleteDaysAfterCreation = $deleteDaysAfterCreation;

        return $this;
    }

    /**
     * @return $this
     */
    public function withEnabled(?bool $enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function build(): MessageConfiguration
    {
        return new MessageConfigurationModel(
            $this->deleteDaysAfterCreation,
            $this->enabled
        );
    }

    public static function of(): MessageConfigurationBuilder
    {
        return new self();
    }
}
